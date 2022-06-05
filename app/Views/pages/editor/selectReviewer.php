<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div id="breadcrumb">
	<a href="/index">Home</a> &gt;
			<a href="/user" class="hierarchyLink">User</a> &gt;
			<a href="/editor" class="hierarchyLink">Editor</a> &gt;
			<a href="/editor" class="hierarchyLink">Submissions</a> &gt;
			<a href="/editor/submission/12541" class="hierarchyLink">#12541</a> &gt;
			<a href="/editor/submissionReview/12541" class="hierarchyLink">Review</a> &gt;
			<a href="/editor/selectReviewer/12541" class="current">Reviewers</a></div>

<h2>Reviewers</h2>


<div id="content">


<div id="selectReviewer">
<h3>Select Reviewer</h3>
<form id="submit" method="post" action="/editor/selectReviewer/12541">
	<input type="hidden" name="sort" value="name"/>
	<input type="hidden" name="sortDirection" value="ASC"/>
	<select name="searchField" size="1" class="selectMenu">
		<option label="Reviewing interests" value="interests">Reviewing interests</option>
<option label="First Name" value="first_name">First Name</option>
<option label="Last Name" value="last_name">Last Name</option>
<option label="Username" value="username">Username</option>
<option label="Email" value="email">Email</option>

	</select>
	<select name="searchMatch" size="1" class="selectMenu">
		<option value="contains">contains</option>
		<option value="is">is</option>
		<option value="startsWith">starts with</option>
	</select>
	<input type="text" size="10" name="search" class="textField" value="" />&nbsp;<input type="submit" value="Search" class="button" />
</form>

<p><a href="/editor/selectReviewer/12541?searchInitial=A">A</a> <a href="/editor/selectReviewer/12541?searchInitial=B">B</a> <a href="/editor/selectReviewer/12541?searchInitial=C">C</a> <a href="/editor/selectReviewer/12541?searchInitial=D">D</a> <a href="/editor/selectReviewer/12541?searchInitial=E">E</a> <a href="/editor/selectReviewer/12541?searchInitial=F">F</a> <a href="/editor/selectReviewer/12541?searchInitial=G">G</a> <a href="/editor/selectReviewer/12541?searchInitial=H">H</a> <a href="/editor/selectReviewer/12541?searchInitial=I">I</a> <a href="/editor/selectReviewer/12541?searchInitial=J">J</a> <a href="/editor/selectReviewer/12541?searchInitial=K">K</a> <a href="/editor/selectReviewer/12541?searchInitial=L">L</a> <a href="/editor/selectReviewer/12541?searchInitial=M">M</a> <a href="/editor/selectReviewer/12541?searchInitial=N">N</a> <a href="/editor/selectReviewer/12541?searchInitial=O">O</a> <a href="/editor/selectReviewer/12541?searchInitial=P">P</a> <a href="/editor/selectReviewer/12541?searchInitial=Q">Q</a> <a href="/editor/selectReviewer/12541?searchInitial=R">R</a> <a href="/editor/selectReviewer/12541?searchInitial=S">S</a> <a href="/editor/selectReviewer/12541?searchInitial=T">T</a> <a href="/editor/selectReviewer/12541?searchInitial=U">U</a> <a href="/editor/selectReviewer/12541?searchInitial=V">V</a> <a href="/editor/selectReviewer/12541?searchInitial=W">W</a> <a href="/editor/selectReviewer/12541?searchInitial=X">X</a> <a href="/editor/selectReviewer/12541?searchInitial=Y">Y</a> <a href="/editor/selectReviewer/12541?searchInitial=Z">Z</a> <a href="/editor/selectReviewer/12541"><strong>All</strong></a></p>

<p><a class="action" href="/editor/enrollSearch/12541">Enroll an Existing User As Reviewer</a>&nbsp;|&nbsp;<a class="action" href="/editor/createReviewer/12541">Create New Reviewer</a></p>

<div id="reviewers">
<table class="listing" width="100%">
<tr><td colspan="7" class="headseparator">&nbsp;</td></tr>
<tr class="heading" valign="bottom">
	<td width="20%"><a href="javascript:sortSearch('reviewerName','2')" style="font-weight:bold">Name</a></td>
	<td>Reviewing interests</td>
		<td width="7%"><a href="javascript:sortSearch('done','1')">Done</a></td>
	<td width="7%"><a href="javascript:sortSearch('average','1')">Weeks</a></td>
	<td width="13%"><a href="javascript:sortSearch('latest','1')">Latest</a></td>
	<td width="5%"><a href="javascript:sortSearch('active','1')">Active</a></td>
	<td width="7%" class="heading">Action</td>
</tr>
<tr><td colspan="7" class="headseparator">&nbsp;</td></tr>

<?php foreach($reviewer as $r) : ?>
  <tr valign="top">
    <td>
      <?= $r['username']; ?>
    </td>
    <td colspan="2"></td>
    <td></td>
    <td></td>
    <td></td>
    <td>
      <?php if(isset($assign_reviewer['reviewer_id'])) : ?>
        Assigned
      <?php else : ?>
        <a href="../../editor/selectReviewer/<?= $article_id; ?>/<?= $r['user_id']; ?>">Assign</a>
      <?php endif; ?>
    </td>
  </tr>
<?php endforeach; ?>
<tr><td colspan="7" class="endseparator">&nbsp;</td></tr>
	<tr>
		<td colspan="2" align="left">1 - 1 of 1 Items</td>
		<td colspan="5" align="right"></td>
	</tr>
</table>

<h4>Notes</h4>
<p>Name links to reviewer's profile.<br/>
Ratings is out of 5 (Excellent).<br/>
Weeks refers to average period of time to complete a review.<br/>
Latest is date of most recently accepted review.<br/>
Active is how many reviews are currently being considered or underway.</p>
</div>
</div>


</div><!-- content -->
<?= $this->endSection(); ?>