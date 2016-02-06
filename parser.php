<?php

 $url = "http://codevolution-studio.com/converttojson/conv.php/dataset/83e9cfed-0437-431a-a362-e47fed862bf9/resource/329a5cbf-e561-42e2-b329-84b88a03e154/download/processed-laporan-realisasi-anggaran-jakarta-2009-2012.csv";
 $json = file_get_contents($url);
 $jsonData = json_decode($json,true);

 $jsonLength = count($jsonData);

?>
<html>
  <head>
  </head>
  <body>
    <table border="1"style="widht:100%">
      <thead>
        <tr>
          <th>NO URUT</th>
          <th>TAHUN</th>
          <th>POS ANGGARAN</th>
          <th>SUMBER POS ANGGARAN</th>
          <th>PENJELASAN POS ANGGARAN</th>
          <th>CATATAN</th>
          <th>ANGGARAN SETELAH PERUBAHAN</th>
          <th>REALISASI</th>
          <th>ID</th>
        </tr>
      </thead>
      <tbody>
        <?php for($i=0;$i<$jsonLength;$i++){ ?>
          <tr>
            <td><?php echo $jsonData[$i]['nomor_urut']; ?></td>
            <td><?php echo $jsonData[$i]['tahun']; ?></td>
            <td><?php echo $jsonData[$i]['pos_anggaran']; ?></td>
            <td><?php echo $jsonData[$i]['sumber_pos_anggaran']; ?></td>
            <td><?php echo $jsonData[$i]['penjelasan_pos_anggaran']; ?></td>
            <td><?php echo $jsonData[$i]['catatan']; ?></td>
            <td><?php echo $jsonData[$i]['anggaran_setelah_perubahan']; ?></td>
            <td><?php echo $jsonData[$i]['realisasi']; ?></td>
            <td><?php echo $jsonData[$i]['id']; ?></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </body>

</html>
