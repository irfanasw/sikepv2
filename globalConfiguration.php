<?php

class globalConfiguration {
    //Global Configuration
    private $serverName = "localhost";
    private $user = "root";
    private $password = "ibu";
    private $databaseName = "kependuduk";
    private $siteName = "Data Dosen Site";

    public function getServerName() {
        return $this->serverName;
    }

   public function getUser() {
        return $this->user;
    }

   public function getPassword() {
        return $this->password;
    }

   public function getDatabaseName() {
        return $this->databaseName;
    }

   public function getSiteName() {
        return $this->siteName;
    }
}
?>