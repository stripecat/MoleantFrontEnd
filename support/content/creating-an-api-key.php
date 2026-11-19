<p class="support-lead">An API key lets your own scripts and tools read and change the data of one organization in Moleant Discover.</p>

<h2>Before you start</h2>
<p>You will need:</p>
<ul>
	<li>A user that can sign in to <a href="https://discover.moleant.com/">Moleant Discover</a>.</li>
	<li>Access to <strong>Settings</strong> for the organization the key should belong to.</li>
</ul>

<h2>Step 1 – Open API Keys</h2>
<p>
	Sign in to Moleant Discover, open <strong>Settings</strong> and choose the <strong>API Keys</strong> tab.
	The tab lists the keys that already exist.
</p>

<h2>Step 2 – Add the key</h2>
<ol>
	<li>Select <strong>Add API Key</strong>.</li>
	<li>Choose the <strong>organization</strong> the key should give access to.</li>
	<li>Give the key a <strong>descriptive name</strong>, for example the tool or script that will use it.</li>
	<li>Save. The new key appears in the list.</li>
</ol>
<p>A descriptive name makes it easy to see later which keys are still in use and which can be removed.</p>

<div class="support-note support-warning">
	<p>
		<strong>Keep your key secret.</strong> An API key gives access to its organization's data, including
		changing and deleting assets. Store it like a password, never put it in code that others can read, and
		remove keys you no longer use.
	</p>
</div>

<h2>Step 3 – Use the key</h2>
<p>Send the key in the <code>X-Api-Key</code> header on every request. For example:</p>
<pre><code>curl -H "X-Api-Key: YOUR_API_KEY" \
     "https://api.moleant.com/v2/organizations/YOUR_ORG_ID/systems"</code></pre>
<p>
	Replace <code>YOUR_API_KEY</code> with your key and <code>YOUR_ORG_ID</code> with your Organisation ID, which
	you can find in <strong>Settings</strong>, in the <strong>Permissions</strong> tab.
</p>
<p>
	If the key is missing or wrong, the API answers with <code>Key token invalid or empty.</code>
	See the <a href="/support/?a=api-documentation">API documentation</a> for every endpoint and what it returns.
</p>

<h2>Removing a key</h2>
<p>
	Open <strong>Settings</strong> and the <strong>API Keys</strong> tab again and remove the key from the list.
	Anything that still uses it stops working at once, so update your tools first if they are still in use.
</p>
