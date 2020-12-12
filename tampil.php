<table border="1">
    <tr>
        <th>NIM</th>
        <th>Nama</th>
        <th>Prodi</th>
        <th>Angkatan</th>
        <th>Aksi</th>
    </tr>
    <?php
    include "koneksi.php";
    $urut = mysqli_query($koneksi, "select * from mahasiswa order by nim asc");
    while($data = mysqli_fetch_array($urut)):
    ?>
    <tr>
        <td><?php 
            echo $data['nim'];
        ?></td>
        <td><?php 
            echo $data['nama'];
        ?></td>
        <td><?php
            echo $data['prodi'];
        ?></td>
        <td><?php 
            echo $data['angkatan']; 
        ?></td>
        <td>
            <button id="<?php echo $data['nim']; ?>" class="update"> update </button>
            <button id="<?php echo $data['nim']; ?>" class="hapus"> Hapus </button>
        </td>
    </tr>
    <?php endwhile;?>
</table>
<script type='text/javascript'>
    function reset(){
    document.getElementById("editnim").innerHTML = '';
    document.getElementById("editnama").innerHTML = '';
    }
$(document).on('click', '.hapus', function(){
    var id = $(this).attr('id');
    $.ajax({
        type: 'POST',
        url: "hapus.php",
        data: {id:id},
        success: function() {
            $('#show').load("tampil.php");
        }, error: function(response){
            console.log(response.responseText);
        }
    });
});
$(document).on('click', '.update', function(){
    var id = $(this).attr('id');
    var nama=$("#editnama").val();
    var prodi=$("#editprodi").val();
    var angkatan=$("#editangkatan").val();
    $.ajax({
        type: 'POST',
        url:"edit.php",
        data: {
            id:id,
            nama:nama,
            prodi:prodi,
            angkatan:angkatan
        },
        cache   : false,
        success : function(data){
            reset();
            $('#editnim').val(id);
            $('#show').load("tampil.php");
        }, error: function(response){
            console.log(response.responseText);
        }
    });
});
</script>