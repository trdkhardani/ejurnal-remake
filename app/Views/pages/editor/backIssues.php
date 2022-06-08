<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div id="breadcrumb">
  <a href="<?= base_url(); ?>/index">Home</a> &gt;
  <a href="<?= base_url(); ?>/user" class="hierarchyLink">User</a> &gt;
  <a href="<?= base_url(); ?>/editor" class="hierarchyLink">Editor</a> &gt;
  <a href="<?= base_url(); ?>/editor/futureIssues" class="hierarchyLink">Issues</a> &gt;
  <a href="<?= base_url(); ?>/editor/backIssues" class="current">Back Issues</a>
</div>

<h2>Back Issues</h2>


<div id="content">



  <script type="text/javascript">
    $(document).ready(function() {
      setupTableDND("#dragTable", "moveIssue");
    });
  </script>

  <ul class="menu">
    <li><a href="<?= base_url(); ?>/editor/createIssue">Create Issue</a></li>
    <li><a href="<?= base_url(); ?>/editor/futureIssues">Future Issues</a></li>
    <li class="current"><a href="<?= base_url(); ?>/editor/backIssues">Back Issues</a></li>
  </ul>

  <br />


  <div id="issues">
    <table width="100%" class="listing" id="dragTable">
      <tr>
        <td colspan="5" class="headseparator">&nbsp;</td>
      </tr>
      <tr class="heading" valign="bottom">
        <td width="60%">Issue</td>
        <td width="15%">Published</td>
        <td width="15%">Items</td>
        <td width="5%">Order</td>
        <td width="5%" align="right">Action</td>
      </tr>
      <tr>
        <td colspan="5" class="headseparator">&nbsp;</td>
      </tr>

      <?php if (isset($issue_publish)) : ?>
        <?php foreach ($issue_publish as $issue) : ?>
          <tr valign="top" class="data" id="<?= $issue['issue_id']; ?>">
            <td class="drag"><a href="<?= base_url(); ?>/editor/issueToc/787" class="action">Vol <?= $issue['volume']; ?>, No <?= $issue['number']; ?> (<?= $issue['year']; ?>)</a></td>
            <td class="drag"><?= $issue['date_publish']; ?></td>
            <td class="drag">1</td>
            <td><a href="<?= base_url(); ?>/editor/moveIssue?d=u&amp;id=787&amp;issuesPage=1">&uarr;</a> <a href="<?= base_url(); ?>/editor/moveIssue?d=d&amp;id=787&amp;issuesPage=1">&darr;</a></td>
            <td align="right"><a href="<?= base_url(); ?>/editor/removeIssue/787?issuesPage=1" onclick="return confirm('Are you sure you want to permanently delete this issue?')" class="action">Delete</a></td>
          </tr>
        <?php endforeach; ?>
      <?php else : ?>
        <tr>
          <td colspan="5">No Issue Publish</td>
        </tr>
      <?php endif; ?>
      <!-- <tr valign="top" class="data" id="issue-789">
        <td class="drag"><a href="<?= base_url(); ?>/editor/issueToc/789" class="action">Vol 1, No 2 (2022)</a></td>
        <td class="drag">2022-06-03</td>
        <td class="drag">2</td>
        <td><a href="<?= base_url(); ?>/editor/moveIssue?d=u&amp;id=789&amp;issuesPage=1">&uarr;</a> <a href="<?= base_url(); ?>/editor/moveIssue?d=d&amp;id=789&amp;issuesPage=1">&darr;</a></td>
        <td align="right"><a href="<?= base_url(); ?>/editor/removeIssue/789?issuesPage=1" onclick="return confirm('Are you sure you want to permanently delete this issue?')" class="action">Delete</a></td>
      </tr> -->
      <tr>
        <td colspan="5" class="endseparator">&nbsp;</td>
      </tr>
      <!-- <tr>
        <td colspan="2" align="left">1 - 2 of 2 Items</td>
        <td colspan="3" align="right"></td>
      </tr> -->
    </table>

    <form action="<?= base_url(); ?>/editor/setCurrentIssue" method="post">
      Current Issue&nbsp;&nbsp;
      <select name="issueId" class="selectMenu">
        <option value="">None</option>
        <option label="Vol 1, No 1 (2022)" value="787" selected="selected">Vol 1, No 1 (2022)</option>
        <option label="Vol 1, No 2 (2022)" value="789">Vol 1, No 2 (2022)</option>
      </select>
      <input type="submit" value="Record" class="button defaultButton" />
    </form>
  </div>

</div><!-- content -->
</div><!-- main -->
</div><!-- body -->



</div><!-- container -->
<?= $this->endSection(); ?>