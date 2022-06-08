<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div id="breadcrumb">
  <a href="<?= base_url(); ?>/index">Home</a> &gt;
  <a href="<?= base_url(); ?>/issue/archive" class="current">Archives</a>
</div>

<h2>Archives</h2>


<div id="content">



  <div id="issues">
    <div style="float: left; width: 100%;">
      <h3>2022</h3>

      <?php if (isset($issues)) : ?>
        <?php foreach ($issues as $issue) : ?>
          <div id="issue" style="clear:left;">
            <h4><a href="<?= base_url(); ?>/issue/view/<?= $issue['issue_id']; ?>">Vol <?= $issue['volume']; ?>, No <?= $issue['number']; ?> (<?= $issue['year']; ?>)</a></h4>
            <div class="issueDescription"></div>
          </div>
        <?php endforeach; ?>
      <?php else : ?>
      <?php endif; ?>

      <br />
    </div>
    1 - 2 of 2 Items&nbsp;&nbsp;&nbsp;&nbsp;

  </div>

</div><!-- content -->
</div><!-- main -->
</div><!-- body -->



</div><!-- container -->
<?= $this->endSection(); ?>