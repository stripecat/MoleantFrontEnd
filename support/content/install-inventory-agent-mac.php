<p class="support-lead">Installation guide · script version 0.5</p>

<p>
	The Moleant Inventory Agent collects an inventory of your Mac and sends it to Moleant.
	Once installed, it runs automatically as a background service <strong>every 6 hours</strong>.
	This guide walks you through testing it safely and installing it.
</p>

<h2>Before you start</h2>
<p>You will need:</p>
<ul>
	<li>A Mac running macOS, with an <strong>administrator account</strong> (you will be asked for your password).</li>
	<li>
		Your <strong>Organisation ID</strong> (orgid). It looks like <code>5da99061b8f6af83f0e5d2cf</code>.
		You can find it in <strong>Moleant Discover</strong> under <strong>Settings</strong>, in the
		<strong>Permissions</strong> tab.
	</li>
	<li>
		These three files, saved together in the same folder:
		<code>moleant-inventory.sh</code>, <code>install.sh</code> and <code>uninstall.sh</code>.
	</li>
	<li>An internet connection that can reach <code>https://api.moleant.com</code>.</li>
</ul>
<p>Nothing else needs to be installed. The scripts only use tools that already come with macOS.</p>

<h3>What information is collected</h3>
<ul>
	<li>Computer name, serial number, model, macOS version, last restart and setup date</li>
	<li>Network adapters: MAC address, IP addresses, subnets, gateway, DNS servers and routes</li>
	<li>Local user accounts and groups</li>
	<li>Installed applications (name, version, install date, publisher)</li>
	<li>System services (launchd): name, running state, account and program path</li>
	<li>Processor, memory and disks (size and usage)</li>
</ul>
<div class="support-note">
	<p>The agent does <strong>not</strong> read your documents, e-mail, browsing history or passwords.</p>
</div>

<h2>Step 1 – Open Terminal</h2>
<p>Press <code>Cmd</code> + <code>Space</code>, type <strong>Terminal</strong> and press Enter.</p>

<h2>Step 2 – Go to the folder with the files</h2>
<p>
	Change to the folder where you saved the three files. For example, if they are in your
	Downloads folder:
</p>
<pre><code>cd ~/Downloads</code></pre>
<p>If the folder name contains spaces, put the path in quotes:</p>
<pre><code>cd "/Users/yourname/Documents/Moleant/Macbook engine"</code></pre>
<p>Check that the files are there:</p>
<pre><code>ls moleant-inventory.sh install.sh uninstall.sh</code></pre>

<h2>Step 3 – Make the scripts runnable</h2>
<pre><code>chmod +x moleant-inventory.sh install.sh uninstall.sh</code></pre>
<p>
	If the files were downloaded from the internet, macOS may refuse to run them. Remove the download
	warning flag with:
</p>
<pre><code>xattr -d com.apple.quarantine moleant-inventory.sh install.sh uninstall.sh</code></pre>
<p>(If this command reports that the attribute does not exist, that is fine – continue.)</p>

<h2>Step 4 – Test without sending anything (optional)</h2>
<p>This collects the inventory and saves it to a file on your Mac. <strong>Nothing is sent to Moleant.</strong></p>
<pre><code>./moleant-inventory.sh --dry-run &gt; result.json</code></pre>
<p>
	It takes about 20–60 seconds. You will see progress lines such as <em>Applications</em> and <em>Network</em>.
	A warning that the script is not running as root is expected here.
</p>
<p>Open the result to see exactly what would be sent:</p>
<pre><code>open -e result.json</code></pre>

<h2>Step 5 – Install the service</h2>
<p>
	Replace <code>YOUR_ORG_ID</code> with your Organisation ID from
	<strong>Moleant Discover → Settings → Permissions</strong>:
</p>
<pre><code>sudo ./install.sh --orgid YOUR_ORG_ID</code></pre>
<p>
	Terminal asks for your Mac password. While you type it, nothing appears on screen – this is normal.
	Press Enter when done.
</p>
<div class="support-note support-warning">
	<p>
		The service starts immediately, so the <strong>first inventory is sent to Moleant right away</strong>
		(<code>api.moleant.com</code>). After that it runs every 6 hours and every time the Mac starts.
		Review <code>result.json</code> from Step 4 first if you are unsure.
	</p>
</div>
<p>The installer:</p>
<ul>
	<li>copies the script to <code>/usr/local/libexec/moleant-inventory.sh</code>,</li>
	<li>saves your Organisation ID in <code>/usr/local/etc/moleant/agent.conf</code> (readable by the administrator only),</li>
	<li>installs and starts a background service named <code>com.moleant.agent</code>.</li>
</ul>
<p>You do not need to keep the downloaded files after installing, except to uninstall or update later.</p>

<h2>Step 6 – Check that it works</h2>
<p>Look at the service status:</p>
<pre><code>sudo launchctl print system/com.moleant.agent | grep -E 'state|last exit'</code></pre>
<p>
	<code>last exit code = 0</code> means the last run succeeded. The service shows as
	<code>not running</code> between runs – that is normal, it only runs briefly every 6 hours.
</p>
<p>Read the log of what the agent did:</p>
<pre><code>tail -n 20 /var/log/moleant-agent.log</code></pre>
<p>A successful run ends with <code>Script done</code>. Your Mac should now also appear in Moleant Discover.</p>
<p>If the Mac is asleep at the scheduled time, the run happens when it wakes up.</p>

<h2>Updating</h2>
<p>
	To install a new version of the script, replace the files in your folder and run Step 5 again.
	The old service is replaced. You can leave out <code>--orgid</code> – the saved one is kept.
</p>

<h2>Troubleshooting</h2>
<div class="support-table-wrap">
	<table>
		<thead>
			<tr><th scope="col">Message</th><th scope="col">What to do</th></tr>
		</thead>
		<tbody>
			<tr>
				<td><code>Permission denied</code></td>
				<td>Run the <code>chmod +x</code> command from Step 3.</td>
			</tr>
			<tr>
				<td><code>command not found</code></td>
				<td>You are in the wrong folder (Step 2), or you left out <code>./</code> before the file name.</td>
			</tr>
			<tr>
				<td><code>Please run as root</code></td>
				<td>Put <code>sudo</code> in front of the command.</td>
			</tr>
			<tr>
				<td><code>moleant-inventory.sh not found next to the installer</code></td>
				<td><code>install.sh</code> and <code>moleant-inventory.sh</code> must be in the same folder.</td>
			</tr>
			<tr>
				<td><code>Invalid orgid</code></td>
				<td>The ID may only contain letters, digits, <code>-</code> and <code>_</code>. Check for spaces or typos.</td>
			</tr>
			<tr>
				<td><code>Upload failed (curl exit code …)</code> in the log</td>
				<td>The Mac could not reach Moleant, or the Organisation ID was rejected. Check your internet connection and the ID. The next run happens automatically, or run <code>sudo launchctl kickstart system/com.moleant.agent</code> to try again now.</td>
			</tr>
			<tr>
				<td>macOS says the file cannot be verified</td>
				<td>Run the <code>xattr</code> command from Step 3.</td>
			</tr>
		</tbody>
	</table>
</div>
<p>For anything else, contact your Moleant administrator and include the full text of the message and the last lines of the log.</p>

<h2>Uninstalling</h2>
<p>This stops the service and removes the installed script. The saved Organisation ID and the log are kept:</p>
<pre><code>sudo ./uninstall.sh</code></pre>
<p>To remove those as well:</p>
<pre><code>sudo ./uninstall.sh --purge</code></pre>
<p>Afterwards you can delete the downloaded files and <code>result.json</code>.</p>
