<section>
 <h1><?php echo $judul ?></h1>
 <h4>Nama</h4>
 <ul type="disc">
 <li>Nama Depan : Rangga Pramana Putra</li>
 <li>Nama Belakang : Rangga</li>
 </ul>
 <br>
 <h4>Alamat</h4>
 <ul type="none">
 <li> Perumahan Bukit Waringin Blok c 19 no 5</li>
 </ul>
 
 <h4>Tempat Lahir</h4>
 <ul type="none">
 <li>Jakarta</li>
 </ul>
 <h4>Olah Raga Favorit</h4>
 <ul type="square">
 <li>Sepak Bola</li>
 <li>Gitar</li>
 </ul>
</section>

<?php
public function about()

 {
 $data['judul'] = "Halaman About";
 $this->load->view('v_header', $data);
 $this->load->view('v_about', $data);
 $this->load->view('v_footer', $data);
 }
