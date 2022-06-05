
<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div id="breadcrumb">
	<a href="/index">Home</a> &gt;
			<a href="/user" class="hierarchyLink">User</a> &gt;
			<a href="/editor" class="hierarchyLink">Editor</a> &gt;
			<a href="/editor" class="hierarchyLink">Submissions</a> &gt;
			<a href="/editor/submission/12687" class="hierarchyLink">#12687</a> &gt;
			<a href="/editor/submissionEditing/12687" class="current">Editing</a></div>

<h2>#12687 Editing</h2>


<div id="content">



<ul class="menu">
	<li><a href="/editor/submissions/<?= $article['article_id']; ?>">Summary</a></li>
	<li class="current"><a href="/editor/submissionReview/<?= $article['article_id']; ?>">Review</a></li>
	<li><a href="/editor/submissionEditing/<?= $article['article_id']; ?>">Editing</a></li>	<li><a href="/editor/submissionHistory/12687">History</a></li>
	<li><a href="/editor/submissionCitations/<?= $article['article_id']; ?>">References</a></li>
</ul>

<div id="submission">
<h3>Submission</h3>

<table width="100%" class="data">
	<tr>
		<td width="20%" class="label">Authors</td>
		<td width="80%">
			
			Cyntia dfdsd Niani <a href="/user/email?redirectUrl=http%3A%2F%2Fiptek.its.ac.id%2Findex.php%2Fitj%2Feditor%2FsubmissionEditing%2F12687&amp;to%5B%5D=%22Cyntia%20dfdsd%20Niani%22%20%3Ccyntian%40ppi.its.ac.id%3E&amp;subject=xczxzcxcz&amp;articleId=12687" class="icon"><img src="https://iptek.its.ac.id/lib/pkp/templates/images/icons/mail.gif" width="16" height="14" alt="Mail" /></a>
		</td>
	</tr>
	<tr>
		<td class="label">Title</td>
		<td>xczxzcxcz</td>
	</tr>
	<tr>
		<td class="label">Section</td>
		<td>Articles</td>
	</tr>
	<tr>
		<td class="label">Editor</td>
		<td>
										None assigned
					</td>
	</tr>
</table>
</div>

<div class="separator"></div>

<div id="copyedit">
<h3>Copyediting</h3>


<table width="100%" class="info">
	<tr>
		<td width="28%" colspan="2"><a href="/editor/viewMetadata/12687" class="action">Review Metadata</a></td>
		<td width="18%" class="heading">Request</td>
		<td width="18%" class="heading">Underway</td>
		<td width="18%" class="heading">Complete</td>
		<td width="18%" class="heading">Acknowledge</td>
	</tr>
	<tr>
		<td width="2%">1.</td>
				<td width="26%">Initial Copyedit</td>
		<td>
													
		</td>
		<td>
							N/A
					</td>
		<td>
							<a href="/editor/completeCopyedit?articleId=12687" class="action">Complete</a>
					</td>
		<td>
							N/A
					</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td colspan="5">
			File:
							Request email cannot be sent until file is selected for copyediting in Editor Decision, Review page.
					</td>
	</tr>
	<tr>
		<td colspan="6" class="separator">&nbsp;</td>
	</tr>
	<tr>
		<td>2.</td>
				<td>Author Copyedit</td>
		<td>
							<img src="https://iptek.its.ac.id/lib/pkp/templates/images/icons/mail_disabled.gif" width="16" height="14" alt="Mail" />
						
		</td>
		<td>
				&mdash;
		</td>
		<td>
				&mdash;
		</td>
		<td>
							<img src="https://iptek.its.ac.id/lib/pkp/templates/images/icons/mail_disabled.gif" width="16" height="14" alt="Mail" />
						
		</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td colspan="5">
			File:
					</td>
	</tr>
	<tr>
		<td colspan="6" class="separator">&nbsp;</td>
	</tr>
	<tr>
		<td>3.</td>
				<td>Final Copyedit</td>
		<td>
						
		</td>
		<td>
							N/A
					</td>
		<td>
							<a href="/editor/completeFinalCopyedit?articleId=12687" class="action">Complete</a>
					</td>
		<td>
							N/A
					</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td colspan="5">
			File:
					</td>
	</tr>
	<tr>
		<td colspan="6" class="separator">&nbsp;</td>
	</tr>
</table>

<form method="post" action="/editor/uploadCopyeditVersion"  enctype="multipart/form-data">
	<input type="hidden" name="articleId" value="12687" />
	Upload file to
	<input type="radio" name="copyeditStage" id="copyeditStageInitial" value="initial" checked="checked" /><label for="copyeditStageInitial">Step 1</label>,
	<input type="radio" name="copyeditStage" id="copyeditStageAuthor" value="author" disabled="disabled" /><label for="copyeditStageAuthor" class="disabled">Step 2</label>, or
	<input type="radio" name="copyeditStage" id="copyeditStageFinal" value="final" disabled="disabled" /><label for="copyeditStageFinal" class="disabled">Step 3</label>
	<input type="file" name="upload" size="10" class="uploadField" />
	<input type="submit" value="Upload" class="button" />
</form>

Copyedit Comments
	<a href="javascript:openComments('/editor/viewCopyeditComments/12687');" class="icon"><img src="https://iptek.its.ac.id/lib/pkp/templates/images/icons/comment.gif" width="16" height="14" alt="Comment" /></a>No Comments

&nbsp;&nbsp;
<a href="javascript:openHelp('/editor/instructions/copy')" class="action">Copyedit Instructions</a>
</div>

<div class="separator"></div>

<div id="scheduling">
<h3>Scheduling</h3>

<table class="data" width="100%">
	<form action="/editor/scheduleForPublication/12687" method="post">
		<tr valign="top">
			<td width="25%" class="label">
				<label for="issueId">Schedule for publication in</label>
			</td>
			<td width="25%" class="value">
																	<select name="issueId" id="issueId" class="selectMenu">
					<option value="">To Be Assigned</option>
					<option label="------    Future Issues    ------" value="-100">------    Future Issues    ------</option>
<option label="Vol 2, No 1 (2023)" value="790">Vol 2, No 1 (2023)</option>
<option label="Vol 2, No 2 (2023)" value="809">Vol 2, No 2 (2023)</option>
<option label="------    Current Issue    ------" value="-101">------    Current Issue    ------</option>
<option label="------    Back Issues    ------" value="-102">------    Back Issues    ------</option>
<option label="Vol 1, No 1 (2022)" value="787">Vol 1, No 1 (2022)</option>
<option label="Vol 1, No 2 (2022)" value="789">Vol 1, No 2 (2022)</option>

				</select>
			</td>
			<td width="50%" class="value">
				<input type="submit" value="Record" class="button defaultButton" />&nbsp;
							</td>
		</tr>
	</form>
	</table>
</div>
<div class="separator"></div>


<div id="layout">
<h3>Layout</h3>


<table width="100%" class="info">
	<tr>
		<td width="28%" colspan="2">&nbsp;</td>
		<td width="18%" class="heading">Request</td>
		<td width="16%" class="heading">Underway</td>
		<td width="16%" class="heading">Complete</td>
		<td width="22%" colspan="2" class="heading">Acknowledge</td>
	</tr>
	<tr>
		<td colspan="2">
			Layout Version
		</td>
		<td>
							N/A
					</td>
		<td>
							N/A
					</td>
		<td>
							N/A
					</td>
		<td colspan="2">
							N/A
					</td>
	</tr>
	<tr valign="top">
		<td colspan="6">
			File:&nbsp;&nbsp;&nbsp;&nbsp;
							None (Upload final copyedit version as Layout Version prior to sending request)
					</td>
	</tr>
	<tr>
		<td colspan="7" class="separator">&nbsp;</td>
	</tr>

	<tr>
		<td colspan="2">Galley Format</td>
		<td colspan="2" class="heading">File</td>
		<td class="heading">Order</td>
		<td class="heading">Action</td>
		<td class="heading">Views</td>
	</tr>
		<tr>
		<td colspan="7" class="nodata">None</td>
	</tr>
		<tr>
		<td colspan="7" class="separator">&nbsp;</td>
	</tr>
	<tr>
		<td width="28%" colspan="2">Supplementary Files</td>
		<td width="34%" colspan="2" class="heading">File</td>
		<td width="16%" class="heading">Order</td>
		<td width="16%" colspan="2" class="heading">Action</td>
	</tr>
		<tr>
		<td colspan="7" class="nodata">None</td>
	</tr>
		<tr>
		<td colspan="7" class="separator">&nbsp;</td>
	</tr>
</table>

<form method="post" action="/editor/uploadLayoutFile"  enctype="multipart/form-data">
	<input type="hidden" name="from" value="submissionEditing" />
	<input type="hidden" name="articleId" value="12687" />
	Upload file to <input type="radio" name="layoutFileType" id="layoutFileTypeSubmission" value="submission" checked="checked" /><label for="layoutFileTypeSubmission">Layout Version</label>, <input type="radio" name="layoutFileType" id="layoutFileTypeGalley" value="galley" /><label for="layoutFileTypeGalley">Galley</label>, <input type="radio" name="layoutFileType" id="layoutFileTypeSupp" value="supp" /><label for="layoutFileTypeSupp">Supp. files</label>
	<input type="file" name="layoutFile" size="10" class="uploadField" />
	<input type="submit" value="Upload" class="button" />
	<br />
	Create remote <input type="radio" name="layoutFileType" id="layoutFileTypeGalley" value="galley" /><label for="layoutFileTypeGalley">Galley</label>, <input type="radio" name="layoutFileType" id="layoutFileTypeSupp" value="supp" /><label for="layoutFileTypeSupp">Supp. files</label>
	<input type="submit" name="createRemote" value="Create" class="button" />
</form>

<div id="layoutComments">
Layout Comments
	<a href="javascript:openComments('/editor/viewLayoutComments/12687');" class="icon"><img src="https://iptek.its.ac.id/lib/pkp/templates/images/icons/comment.gif" width="16" height="14" alt="Comment" /></a> No Comments

</div>
</div>

<div class="separator"></div>


<div id="proofread">
<h3>Proofreading</h3>


<table width="100%" class="info">
	<tr>
		<td width="28%" colspan="2">&nbsp;</td>
		<td width="18%" class="heading">Request</td>
		<td width="18%" class="heading">Underway</td>
		<td width="18%" class="heading">Complete</td>
		<td width="18%" class="heading">Acknowledge</td>
	</tr>
	<tr>
		<td width="2%">1.</td>
		<td width="26%">Author</td>
				<td>
			
							<a href="/editor/notifyAuthorProofreader?articleId=12687" class="icon"><img src="https://iptek.its.ac.id/lib/pkp/templates/images/icons/mail.gif" width="16" height="14" alt="Mail" /></a>
			
			
		</td>
		<td>
				&mdash;
		</td>
		<td>
			&mdash;
		</td>
		<td>
							<img src="https://iptek.its.ac.id/lib/pkp/templates/images/icons/mail_disabled.gif" width="16" height="14" alt="Mail" />
						
		</td>
	</tr>
	<tr>
		<td>2.</td>
		<td>Proofreader</td>
				<td>
												<a href="/editor/editorInitiateProofreader?articleId=12687" class="action">Initiate</a>
										
		</td>
		<td>
							N/A
					</td>
		<td>
							&mdash;
					</td>
		<td>
							N/A
					</td>
	</tr>
	<tr>
		<td>3.</td>
		<td>Layout Editor</td>
						<td>
												<a href="/editor/editorInitiateLayoutEditor?articleId=12687" class="action">Initiate</a>
											
		</td>
		<td>
							N/A
					</td>
		<td>
							&mdash;
					</td>
		<td>
							N/A
					</td>
	</tr>
	<tr>
		<td colspan="6" class="separator">&nbsp;</td>
	</tr>
</table>

Proofreading Corrections
	<a href="javascript:openComments('/editor/viewProofreadComments/12687');" class="icon"><img src="https://iptek.its.ac.id/lib/pkp/templates/images/icons/comment.gif" width="16" height="14" alt="Comment" /></a>No Comments

&nbsp;&nbsp;
<a href="javascript:openHelp('/editor/instructions/proof')" class="action">Proofing Instructions</a>
</div>


</div><!-- content -->
<?= $this->endSection(); ?>