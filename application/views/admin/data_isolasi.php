 <div class="header"> 
    <h1 class="page-header ml-3">
        Data Isolasi Mandiri
      </h1>
 </div>  
    
	<div class="card bg-white">
	 <div class="card-body">
	  <div class="container">
	   <div class="table-responsive">
	    <table class="table table-bordered table-striped mt-3">

			<tr class="text-center">
				<th>NO</th>
		        <th>Nama Penanggung jawab</th>
				<th>No Hp</th>
				<th>Status</th>
				<th>Yang mengeluarkan Status</th>
				<th>Data anda benar</th>
				<th>Alamat Saat ini</th>
				<th>Kabupaten</th>
			</tr>

				<?php
				$no=1;
				foreach ($isolasi as $iso) :?> 

			<tr>
				<td align="center"><?php echo $no++ ?></td>
			     	<?php $iso->id?>
				<td><?php echo $iso->namalengnamapenanggungjawabkap ?></td>
				<td><?php echo $iso->nomorpenanggungjawab ?></td>
				<td><?php echo $iso->status ?></td>
				<td><?php echo $iso->yangmengeluarkanstatus ?></td>
				<td><?php echo $iso->dataandabenar ?></td>
				<td><?php echo $iso->alamatsaatini	 ?></td>
				<td><?php echo $iso->kabupaten ?></td>
			</tr>
				<?php endforeach; ?>
		</table>
	   </div>
	  </div>
	 </div>	
    </div>


