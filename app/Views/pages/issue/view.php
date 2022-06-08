<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div id="breadcrumb">
  <a href="<?= base_url(); ?>/index">Home</a> &gt;
  <a href="<?= base_url(); ?>/issue/archive" class="hierarchyLink">Archives</a> &gt;
  <a href="<?= base_url(); ?>/issue/view/789" class="current">Vol 1, No 2 (2022)</a>
</div>

<h2>Vol 1, No 2 (2022)</h2>


<div id="content">



  <div id="issueDescription"></div>
  <h3>Table of Contents</h3>

  <h4 class="tocSectionTitle">Articles</h4>

  <table class="tocArticle" width="100%">
    <tr valign="top">




      <td class="tocTitle"><a href="<?= base_url(); ?>/article/view/12892">Pemberitahuan</a></td>
      <td class="tocGalleys">
        <a href="<?= base_url(); ?>/article/view/12892/6732" class="file">PDF</a>

      </td>
    </tr>
    <tr>
      <td class="tocAuthors">
        First Last </td>
      <td class="tocPages"></td>
    </tr>
  </table>


  <table class="tocArticle" width="100%">
    <tr valign="top">




      <td class="tocTitle"><a href="<?= base_url(); ?>/article/view/13087">as</a></td>
      <td class="tocGalleys">
        <a href="<?= base_url(); ?>/article/view/13087/6744" class="file">PDF</a>
        <a href="<?= base_url(); ?>/article/view/13087/6745" class="file">PDF</a>
        <a href="<?= base_url(); ?>/article/view/13087/6746" class="file">Remote</a>

      </td>
    </tr>
    <tr>
      <td class="tocAuthors">
        Cyntia Niani </td>
      <td class="tocPages">1-10</td>
    </tr>
  </table>




</div><!-- content -->
</div><!-- main -->
</div><!-- body -->



</div><!-- container -->
<?= $this->endSection(); ?>