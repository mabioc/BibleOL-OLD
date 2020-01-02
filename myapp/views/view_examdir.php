<?php if (!$is_logged_in): ?>
  <div class="alert alert-warning">
       <h1><?= $this->lang->line('warning') ?></h1>
       <p><?= $this->lang->line('not_logged_in') ?></p>
  </div>
<?php endif; ?>

<h1><?= $this->lang->line('List_of_Exams_Title') ?></h1>
<h2><?= $this->lang->line('List_of_Exams_SubTitle') ?></h2>

<?php
// TODO:  remove Stub
$dirlist = array(
  array('1', 'Mabio_Test', 'Test Hebrew Exam #1', 'Available from 10/31/2019 09:30 to 10/31/2019 17:00', '1h', 'O. Glanz', '<b>Wait until the allowed time</b>'),
  array('2', 'Mabio_Test_2', 'Test Hebrew Exam #2', 'Available from 10/24/2019 09:30 to 10/25/2019 17:00', '2h', 'O. Glanz', ''),
  array('3', 'Mabio_Test_3', 'Test Hebrew Exam #3', 'Already taken', '1h45', 'O. Glanz', '<a href=view_exam_results?ID=2>View Results</a>'),
);

// if (!empty($dirlist['files'])):
if (!empty($dirlist)):
?>
  </P>
  <h4><b><?= $this->lang->line('Select_Exams_Table') ?></b></h4>
  <table class="type2 table table-striped table-sm">
    <tr>
      <th><?= $this->lang->line('ExamTBL_ID') ?></th>
      <th class="centeralign"><?= $this->lang->line('ExamTBL_Name') ?></th>
      <th class="centeralign"><?= $this->lang->line('ExamTBL_Intro') ?></th>
      <th class="centeralign"><?= $this->lang->line('ExamTBLStatus') ?></th>
      <th class="centeralign"><?= $this->lang->line('ExamTBL_MaxDur') ?></th>
      <th class="centeralign"><?= $this->lang->line('ExamTBL_Teacher') ?></th>
      <th class="centeralign"><?= $this->lang->line('ExamTBL_Operation') ?></th>
    </tr>


  <?php foreach ($dirlist as $exam): ?>
    <tr>
      <td><?= $exam[0] ?></td>
      <td><span class="fas fa-file" style="display:inline-block;"></span>&nbsp;<?= $exam[1] ?></td>
      <td><?= $exam[2] ?></td>
      <td style="text-align: center;"><?= $exam[3] ?></td>
      <td style="text-align: center;"><?= $exam[4] ?></td>
      <td style="text-align: center;"><?= $exam[5] ?></td>
      <td style="text-align: center;"><?= $exam[6] ?></td>
    </tr>
  <?php endforeach; ?>
  </table>
<?php endif; ?>
