



<?php

// This code is important in order to make sure the script must only be loaded from another script and not by any leet hax0r. //EZS

if (INMOLEANT != "TRUE") {
    die("You may not directly reference this script.");
 }
 

$organizations = [];
foreach ($_SESSION["roles"] as $role) {
    $organizations[] = '{"organisation":"'. $role[1] . '", "cguid":"' . $role[2] . '"}';
}

?> <?php

?>
<script>
    const organizations = [<?php echo implode(',', $organizations) ?>];
</script>

<div class="moleantDiv">
<h1>All Assets</h1>
<p>All linked/synced assets to your organizations. Click on any below for details.</p>
</div>
<div class="moleantDiv">

<div id="assets-app">
    <div class="container-fluid">
        <div class="row justify-content-between">
            <div class="col-12 col-xl-10 order-2 order-xl-1 my-2">
                <div class="row">
                    <div class="col-12 col-lg my-1 my-lg-0">
                        <b-input-group>
                            <template #prepend>
                                <b-input-group-text>
                                    <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
                                        <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
                                    </svg>
                                </b-input-group-text>
                            </template>
                            <b-form-input type="search" placeholder="Search" v-model="tables[activeTable].filter"></b-form-input>
                        </b-input-group>
                    </div>
                </div>
            </div>

            <div class="col-12 col-xl-2 d-flex justify-content-end align-items-start order-1 my-2">
            </div>
        </div>

        <div class="row mt-2 mb-4">
            <!-- SEPARATE TABLES -->

            <div
                    v-show="activeTable === 'assets'"
                    class="container-fluid table-responsive"
            >
                <b-table
                        ref="assets"
                        thead-tr-class="b-table-thead"
                        small
                        outlined
                        striped
                        bordered
                        selectable
                        responsive
                        show-empty
                        stacked="lg"
                        no-select-on-click
                        :busy="loading"
                        :filter="tables.assets.filter"
                        :items="tables.assets.items"
                        :fields="tables.assets.fields"
                >
                    <template #cell(Hostname)="data">
                        <a :href="`/assets/?serverid=${data.item.ServerID}&guid=${data.item.CGUID}`">{{ data.item.Hostname }}</a>
                    </template>

                    <template #empty="scope">
                        <p class="text-center">{{ scope.emptyText }}</p>
                    </template>

                    <template #table-busy>
                        <div class="text-center my-2">
                            <b-spinner class="align-middle"></b-spinner>
                            <strong>Loading...</strong>
                        </div>
                    </template>
                </b-table>
            </div>

        </div>
    </div>

    <div id="addSystem" class="modal">
        <h2><img src="https://sadiscover.blob.core.windows.net/img/linux.svg" width="48" height="48"> Add System</h2>
        <p>Fill in below to add a system</p>


        <p><label for="licdropdown"><b>Organization </b></label><br>
            <select id="sguid" name="sguid" v-model="formAdd.cguid">
                <?php

                foreach ($_SESSION['roles'] as $role) {
                    echo "<option value=\"" . $role[2] . "\">" . $role[1] . "</option>";
                }


                ?>
            </select>
        </p>

        <p><b>System name</b><br>
            <input type="text" v-model="formAdd.name" placeholder="eg. Dyinamic Pro" name="ven" required>
        </p>

        <p>
            <b-button
                variant="primary"
                class="ml-1"
                @click="addSystem"
                :disabled="!formAdd.name || !formAdd.cguid"
                >
                Add
            </b-button>
        </p>

    </div>
</div>
            </div>

<script>
    Vue.use(VueToast, {
        position: 'bottom'
    });
    new Vue({
        el: '#assets-app',
        data: {
            parser: new DOMParser(),
            formAdd: {
                name: '',
                cguid: ''
            },
            loading: true,
            multiselect: {
                value: [],
                options: [],
            },
            datePicker: {
                from: '',
                to: '',
            },
            endpoints: {
                token: '/get-token/',
                organizations: 'https://api.moleant.com/discover/ListOrganizations/',
                assets: 'https://api.moleant.com/discover/ListComputers/',
                assetsAdd: 'https://api.moleant.com/discover/AddSystem/',
            },
            activeTable: 'assets',
            tables: {
                assets: {
                    items: [],
                    fields: [
                        { key: 'Hostname', label: 'Name', sortable: true },
                        { key: 'DescriptionCut', label: 'Description', sortable: true },
                        { key: 'OrganizationName', label: 'Organization', sortable: true },
                       
                    ],
                    filter: '',
                    nodata: '',
                },
            },
            cache: {},
        },
        computed: {
            table() {
                return this.tables[this.activeTable];
            }
        },
        mounted() {
            this.tabChangeHandler(this.activeTable);
        },
        watch: {
            activeTable(val, old) {
                this.filter = '';
            }
        },
        methods: {
            htmlDecode(input) {
                const dom = this.parser.parseFromString(input, 'text/html');
                return dom.body.textContent;
            },
            decodeValues(arr) {
                return arr.map((items) => (
                    Object.keys(items)
                        .reduce(
                            (result, key) => {
                                return {
                                    ...result,
                                    [key]: this.htmlDecode(items[key]),
                                }
                            },
                            {},
                        )
                ));
            },
            openModal(selector) {
                $(selector).modal();
                return false;
            },
            reloadTableData() {
                this.cache = [];
                this.tabChangeHandler(this.activeTable);
            },
            addSystem() {
                this.getJwt(jwt => {
                    this.saveSystem(jwt, {
                        "CGuid": this.formAdd.cguid,
                        "SystemName": this.formAdd.name
                    })
                        .then((message) => {
                            $.modal.close();
                            Vue.$toast.success(message);
                            this.reloadTableData();
                        }).catch(message => {
                            Vue.$toast.error(message)
                    });
                });
            },
            clearFilters() {
                this.tabChangeHandler(this.activeTable);
            },
            resetTableData(table) {
                this.tables[table].items = [];
                this.tables[table].nodata = '';
            },
            getJwt(cb) {
                fetch(this.endpoints.token).then(res => res.text()).then(data =>
                {
                    cb(
                        data
                    );
                });


            },
            setBody(jwt, query) {
                const queryObject = query || {};
                return {
                    method: 'POST',
                    body: JSON.stringify(Object.assign({}, { jwt }, queryObject)),
                };
            },
            getOrganizations() {
                return organizations;
            },
            getassets(jwt, query) {
                return fetch(this.endpoints.assets, this.setBody(jwt, query)).then(res => res.json());
            },
            saveSystem(jwt, query) {
                return fetch(this.endpoints.assetsAdd, this.setBody(jwt, query)).then(response => {
                    if (!response.ok) {
                        return response.json()
                            .catch(() => {
                                throw new Error(response.status);
                            })
                            .then(({message, subcode}) => {
                                throw new Error(message + ': ' + subcode || response.status);
                            });
                    }
                    return response.json().then(({subcode}) => subcode);
                });
            },
            tabChangeHandler(tab) {
                this.activeTable = tab;
                this.loading = true;


                if (tab === 'assets') {
                    this.resetTableData('assets');

                    let keyForCache = organizations.reduce((acc, val) => {
                        return acc + val;
                    }, '') + 'assets';

                    if (this.cache[keyForCache]) {
                        this.tables.assets.items = this.cache[keyForCache];
                        this.loading = false;
                        return;
                    } else {
                        this.cache[keyForCache] = [];
                    }

                    this.getJwt(jwt => {
                        organizations.map(({ cguid }) => {
                            const query = Object.assign({}, { "CGuid": cguid, "IncludeDetails": "TRUE" });

                            this.getassets(jwt, query)
                                .then(data => {
                                    const assets = data.Computers.map(Computers => {
                                        if (typeof Computers === 'object') {
                                            const organisation = organizations.find(item => item.cguid == Computers.CGUID);

                                            return {
                                                ...Computers,
                                                id: `${Computers.ServerID}---${Computers.OrganizationName}`,
                                                Organization: organisation ? organisation.organisation : ''
                                            };
                                        }

                                    }).filter(Boolean);
                                    this.table.items = this.table.items.concat(this.decodeValues(assets));
                                    this.cache[keyForCache] = this.cache[keyForCache].concat(assets);
                                })
                                .then(() => {
                                    this.loading = false;
                                })
                        });
                    });
                }
            },
        },
    })
</script>
