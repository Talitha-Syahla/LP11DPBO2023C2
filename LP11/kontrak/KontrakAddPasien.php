<?php

  interface KontrakAddPasienView {
      public function tampil();
      public function Updateform($id);
  }

  interface KontrakAddPasienPresenter {
      public function prosesData();
      public function getId($i);
      public function getNik($i);
      public function getNama($i);
      public function getTempat($i);
      public function getTl($i);
      public function getGender($i);
      public function getEmail($i);
      public function getTelp($i);
      public function getSize();
      public function addPasien($data);
      public function update($data);
  }