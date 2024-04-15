<?php
namespace App\Municipalidad;

use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Http\Request;
use Storage;

class FileManagement
{
    public static function uploadImage($file,$dir,$width=800, $height=800)
    {   //paso los archivos y el directorio adentro de storage
        // Creamos un objeto Image a partir de Intervention Image
        $image = Image::make($file);

        // Modificar la imagen como lo necesites en tu caso
        $image->widen($width, function ($constraint) {
            $constraint->upsize();
        });

        $image->heighten($height, function ($constraint) {
            $constraint->upsize();
        });

        // Generar un nombre único para la imagen
        $path ="/public/".$dir;
        $name = uniqid() . '.' . $file->getClientOriginalExtension();
        // Guardar la imagen en una ruta determinada
        //$image->save(storage_path('public\noticia_img\ ' . $path));
        Storage::put($path.$name, $image->encode());
        // Respuesta, por ejemplo, un mensaje de éxito
        return $name;
    }
    public static function deleteImg( $name, $dir) {
        return Storage::delete("/public/".$dir.$name);

    }
}
