<?php

include_once("kontrak/KontrakAddPasien.php");
include_once("presenter/ProsesAddPasien.php");

class AddPasien implements KontrakAddPasienView
{
    private $prosespasien; //presenter yang dapat berinteraksi langsung dengan view
    private $tpl;

    function __construct()
    {
        //konstruktor
        $this->prosespasien = new ProsesAddPasien();
    }

    function tampil()
    {
        $data = null;
        $data .= '<form method="POST" action="addNew.php">
		<div class="container mt-5">
		  <div class="card">
			<div class="card-body">
			  <div class="form-group">
				<label for="nik">NIK</label>
				<input type="text" name="nik" class="form-control" required>
			  </div>
			  <div class="form-group">
				<label for="nama">Nama</label>
				<input type="text" name="nama" class="form-control" required>
			  </div>
			  <div class="form-group">
				<label for="tempat">Tempat</label>
				<input type="text" name="tempat" class="form-control" required>
			  </div>
			  <div class="form-group">
				<label for="tl">Tanggal Lahir</label>
				<input type="date" name="tl" class="form-control" required>
			  </div>
			  <div class="form-group">
				<label for="gender">Gender</label>
				<select type="pilih" name="gender" class="form-control" required>
					<option value="" disabled selected>Select Gender</option>
					<option value="Laki-laki">Laki-laki</option>
					<option value="Perempuan">Perempuan</option>
				</select>
			</div>
			  <div class="form-group">
				<label for="email">Email</label>
				<input type="text" name="email" class="form-control" required>
			  </div>
			  <div class="form-group">
				<label for="telp">Telepon</label>
				<input type="text" name="telp" class="form-control" required>
			  </div>
			</div>
			<div class="card-footer">
			  <button class="btn btn-success" type="submit" name="add">Submit</button>
			  <button class="btn btn-danger" type="reset">Cancel</button>
			</div>
		  </div>
		</div>
	  </form>';

        // Membaca template addNew.html
        $this->tpl = new Template("templates/addNew.html");

        // Mengganti kode Data_Tabel dengan data yang sudah diproses
        $this->tpl->replace("DATA_FORM", $data);
        $this->tpl->replace("DATA_TITLE", "Tambah");

        // Menampilkan ke layar
        $this->tpl->write();
    }

    function Updateform($id)
    {

        $this->prosespasien->prosesData();
        $listGender = ['Laki-laki', "Perempuan"];
        $dataGender = '<option value="" disabled>Pilih Gender</option>';
        foreach ($listGender as $data) {
            $dataGender .= "<option value=" . $data . " " . (($data == $this->prosespasien->getGender($id)) ? "selected" : " ") . ">" . $data . "</option>";
        }
        $data = null;
        $data .= '<form method="POST" action="addNew.php">
        <div class="container mt-5">
		  <div class="card">
			<div class="card-body">
			  <div class="form-group">
        <input type="hidden" name="id" value="' . $this->prosespasien->getId($id) . '" >
				<label for="nik">NIK</label>
				<input type="text" name="nik" class="form-control" value="' . $this->prosespasien->getNik($id) . '" required>
			  </div>
			  <div class="form-group">
				<label for="nama">Nama</label>
				<input type="text" name="nama" class="form-control" value="' . $this->prosespasien->getNama($id) . '" required>
			  </div>
			  <div class="form-group">
				<label for="tempat">Tempat</label>
				<input type="text" name="tempat" class="form-control" value="' . $this->prosespasien->getTempat($id) . '" required>
			  </div>
			  <div class="form-group">
				<label for="tl">Tanggal Lahir</label>
				<input type="date" name="tl" class="form-control" value="' . $this->prosespasien->getTl($id) . '" required>
			  </div>
			  <div class="form-group">
				<label for="gender">Gender</label>
				<select type="pilih" name="gender" class="form-control" value="' . $this->prosespasien->getGender($id) . '" required>
					DATA_GENDER
				</select>
			</div>
			  <div class="form-group">
				<label for="email">Email</label>
				<input type="text" name="email" class="form-control" value="' . $this->prosespasien->getEmail($id) . '" required>
			  </div>
			  <div class="form-group">
				<label for="telp">Telepon</label>
				<input type="text" name="telp" class="form-control" value="' . $this->prosespasien->getTelp($id) . '" required>
			  </div>
			</div>
			<div class="card-footer">
			  <button class="btn btn-success" type="submit" name="update">Update</button>
			  <button class="btn btn-danger" type="reset">Cancel</button>
			</div>
		  </div>
		</div>
	  </form>';

        // Membaca template addNew.html
        $this->tpl = new Template("templates/addNew.html");

        // Mengganti kode Data_Tabel dengan data yang sudah diproses
        $this->tpl->replace("DATA_FORM", $data);
        $this->tpl->replace("DATA_GENDER", $dataGender);
        $this->tpl->replace("DATA_TITLE", "Update");

        // Menampilkan ke layar
        $this->tpl->write();
    }

    function AddPasien($data)
    {
        $this->prosespasien->AddPasien($data);
    }

    function update($data)
    {
        $this->prosespasien->update($data);
    }
}
