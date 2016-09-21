<?php
// src/AppBundle/Utils/Slugger.php
namespace AppBundle\Utils;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Filesystem\Filesystem;

class Utility
{
    public function toJson($obj)
    {
        $serializer = new Serializer(
            array(new GetSetMethodNormalizer()),
            array('json' => new JsonEncoder())
        );
        $json = $serializer->serialize($obj, 'json');
        $response = new \Symfony\Component\HttpFoundation\Response($json);
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

    public function checkImage($image)
    {
      $status="failed";
      $message = "No file found";
      $file_path="";
      try {

      if(($image instanceof UploadedFile) && ($image->getError()=='0'))
      {
        if(($image->getSize()<2000000))
        {
          $originalname=$image->getClientOriginalName();#gets file name
          $filetype = pathinfo($originalname, PATHINFO_EXTENSION);
          $filename = basename($originalname, ".".$filetype);
          $validfiletypes=array('jpg','jpeg','bmp','png');
          if(in_array(strtolower($filetype),$validfiletypes))
          {
            $fs=new Filesystem();
            $file_path=str_replace(' ', '_', $filename)."_".time().".".$filetype;
            $image->move('uploads',$file_path);
            $status="Successfully uploaded";
            if(!$fs->exists($file_path))
            {
                $status = "success";
                $message = "File Uploaded Successfully";
            }
          }
          else {
              $status="invalid";
              $message = "Invalid file type, we support only jpg, jpeg, bmp, png";
          }
        }
        else {
          $status="size_exceeds";
          $message = "File is too large, please try with small size";
        }

      }
    } catch (Exception $exception) {

        $exception->getMessage();
        $exception->getLine();
        $exception->getTraceAsString();

      }
      return array('status'=>$status,'filename'=>$file_path, 'message'=>$message);
    }
}
