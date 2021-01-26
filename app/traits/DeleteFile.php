<?php

namespace App\Traits;

use Illuminate\Support\Facades\File;

trait DeleteFile{

    public function removePhoto($originalFileName)
   {
     if ($this->isExistedFile($originalFileName)) File::delete($this->uploadFolder. $originalFileName);
   }

}
