<p class="support-lead">A RACI matrix shows, task by task, who does the work, who is answerable for it, who gives advice and who is kept informed.</p>

<p>
	A responsibility assignment matrix, known as a <strong>RACI matrix</strong>, is used to clarify and define roles
	and responsibilities. Each task is a row. For every task you say who takes which of four parts:
	<strong>R</strong>esponsible, <strong>A</strong>ccountable, <strong>C</strong>onsulted or <strong>I</strong>nformed.
	In Moleant Discover the matrix lives on each system, in the <strong>Responsibilities</strong> section, so anyone who
	opens the system can see who to turn to.
</p>

<h2>Who is who in a RACI model?</h2>
<dl class="support-definitions">
	<dt>Responsible</dt>
	<dd>
		Those who do the work to complete the task. There is at least one role with a participation type of
		responsible, although others can be delegated to assist in the work required.
	</dd>
	<dt>Accountable</dt>
	<dd>
		The one ultimately answerable for the correct and thorough completion of the task, the one who ensures the
		prerequisites of the task are met and who delegates the work to those responsible. This role approves and signs
		off on the work.
	</dd>
	<dt>Consulted</dt>
	<dd>
		Those whose opinions are sought, typically subject matter experts, and with whom there is two-way
		communication.
	</dd>
	<dt>Informed</dt>
	<dd>
		Those who are kept up-to-date on progress, often only on completion of the task or deliverable, and with whom
		there is just one-way communication.
	</dd>
</dl>

<h2>Rules of thumb</h2>
<ul>
	<li>Every task needs at least one person who is <strong>Responsible</strong>.</li>
	<li>
		Some theories say each task should have <strong>only one Accountable</strong>, so that it is always clear who has
		the final word. In Moleant Discover each task holds one contact per role.
	</li>
	<li>
		<strong>Consulted</strong> means a conversation in both directions. <strong>Informed</strong> means a message in
		one direction, often just when the work is done.
	</li>
	<li>One person can fill more than one role in the same task, for example both Responsible and Accountable in a small team.</li>
</ul>

<h2>Example</h2>
<p>A matrix for three tasks on a file server. The rows are tasks and the columns are the people involved.</p>
<div class="support-table-wrap">
	<table>
		<thead>
			<tr>
				<th scope="col">Task</th>
				<th scope="col">IT manager</th>
				<th scope="col">System administrator</th>
				<th scope="col">Security officer</th>
				<th scope="col">Service desk</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th scope="row">Install monthly updates</th>
				<td>A</td>
				<td>R</td>
				<td>C</td>
				<td>I</td>
			</tr>
			<tr>
				<th scope="row">Restore a file from backup</th>
				<td>I</td>
				<td>A</td>
				<td>–</td>
				<td>R</td>
			</tr>
			<tr>
				<th scope="row">Remove access for a leaver</th>
				<td>A</td>
				<td>R</td>
				<td>C</td>
				<td>I</td>
			</tr>
		</tbody>
	</table>
</div>
<p>
	Read a row from left to right. In the first row the system administrator installs the updates, the IT manager
	approves the result, the security officer is asked for advice and the service desk is told when it is done.
</p>

<h2>Adding a task in Moleant Discover</h2>
<p>
	You need permission to change data in the organization to add or edit tasks. Without it you can still open a task to
	read it.
</p>
<ol>
	<li>Open the system and go to its <strong>Responsibilities</strong> section.</li>
	<li>Select <strong>Add task</strong>.</li>
	<li>Enter a <strong>task name</strong>.</li>
	<li>
		Choose a contact for <strong>Responsible</strong>, <strong>Accountable</strong>, <strong>Consulted</strong> and
		<strong>Informed</strong>. The lists show the contacts of your organization. Leave a role as <strong>None</strong>
		if nobody has it.
	</li>
	<li>Optionally write <strong>Additional notes</strong> with more details about the task.</li>
	<li>Select <strong>Add</strong>.</li>
</ol>
<div class="support-note">
	<p>
		Choose at least one contact. Discover will not save a task where all four roles are set to <strong>None</strong>.
	</p>
</div>
<p>
	The task now appears in the table with one column per role. A dash means nobody has that role for the task. Use the
	search box above the table to find a task.
</p>

<h2>Changing or removing a task</h2>
<p>
	Select the task name in the table. Change the name, the contacts or the notes and select <strong>Update</strong>, or
	select <strong>Delete</strong> to remove the task.
</p>

<h2>Other variants of the model</h2>
<p>
	RACI has several relatives that add or rename a role. Moleant Discover uses the four roles above, but you may meet
	these elsewhere:
</p>
<ul>
	<li><strong>RASCI</strong> adds <em>Support</em>, for those who help the Responsible.</li>
	<li><strong>RACI-VS</strong> and related forms add <em>Verifier</em> and <em>Signatory</em>.</li>
	<li><strong>CAIRO</strong> adds <em>Omitted</em>, for those deliberately left out of the loop.</li>
	<li><strong>DACI</strong> uses <em>Driver</em>, <em>Approvers</em>, <em>Contributors</em> and <em>Informed</em>.</li>
</ul>

<p>
	See also <a href="/support/?a=adding-a-system">Adding a system</a>. For background on the model, read
	<a href="https://en.wikipedia.org/wiki/Responsibility_assignment_matrix" target="_blank" rel="noopener">Responsibility assignment matrix</a>
	on Wikipedia (opens in a new tab).
</p>
