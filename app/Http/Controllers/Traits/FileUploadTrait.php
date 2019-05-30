<?php

namespace App\Http\Controllers\Traits;

use App\Models\Media;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

trait FileUploadTrait
{

    /**
     * File upload trait used in controllers to upload files
     */
    public function saveFiles(Request $request)
    {
        if (!file_exists(public_path('storage/uploads'))) {
            mkdir(public_path('storage/uploads'), 0777);
            mkdir(public_path('storage/uploads/thumb'), 0777);
        }

        $finalRequest = $request;

        foreach ($request->all() as $key => $value) {
            if ($request->hasFile($key)) {
                if ($request->has($key . '_max_width') && $request->has($key . '_max_height')) {
                    // Check file width
                    $filename = time() . '-' . str_slug($request->file($key)->getClientOriginalName());
                    $file = $request->file($key);
                    $image = Image::make($file);
                    if (!file_exists(public_path('storage/uploads/thumb'))) {
                        mkdir(public_path('storage/uploads/thumb'), 0777, true);
                    }
//                    dd($image);

                    Image::make($file)->resize(50, 50)->save(public_path('storage/uploads/thumb') . '/' . $filename);

                    $width = $image->width();
                    $height = $image->height();
                    if ($width > $request->{$key . '_max_width'} && $height > $request->{$key . '_max_height'}) {
                        $image->resize($request->{$key . '_max_width'}, $request->{$key . '_max_height'});
                    } elseif ($width > $request->{$key . '_max_width'}) {
                        $image->resize($request->{$key . '_max_width'}, null, function ($constraint) {
                            $constraint->aspectRatio();
                        });
                    } elseif ($height > $request->{$key . '_max_width'}) {
                        $image->resize(null, $request->{$key . '_max_height'}, function ($constraint) {
                            $constraint->aspectRatio();
                        });
                    }
                    $image->save(public_path('storage/uploads') . '/' . $filename);
                    $finalRequest = new Request(array_merge($finalRequest->all(), [$key => $filename]));
                } else {

                    $filename = time() . '-' . str_slug($request->file($key)->getClientOriginalName());
                    $request->file($key)->move(public_path('storage/uploads'), $filename);
                    $finalRequest = new Request(array_merge($finalRequest->all(), [$key => $filename]));
                }
            }
        }

        return $finalRequest;
    }


    public function saveAllFiles(Request $request, $downloadable_file_input = null, $model_type = null, $model = null)
    {
        if (!file_exists(public_path('storage/uploads'))) {
            mkdir(public_path('storage/uploads'), 0777);
            mkdir(public_path('storage/upload/thumb'), 0777);
        }
        $finalRequest = $request;

        foreach ($request->all() as $key => $value) {

            if ($request->hasFile($key)) {

                if ($key == $downloadable_file_input) {
                    foreach ($request->file($key) as $item) {
                        $filename = time() . '-' . str_slug($item->getClientOriginalName());
                        $size = $item->getSize() / 1024;
                        $item->move(public_path('storage/uploads'), $filename);
                        Media::create([
                            'model_type' => $model_type,
                            'model_id' => $model->id,
                            'name' => $filename,
                            'type' => $item->getClientMimeType(),
                            'file_name' => $filename,
                            'size' => $size,
                        ]);
                    }
                    $finalRequest = $finalRequest = new Request($request->except($downloadable_file_input));


                } else {
                    if($key != 'video_file'){
                        if($key == 'add_pdf'){
                            $file = $request->file($key);

                            $filename = time() . '-' . str_slug($file->getClientOriginalName());
                            $size = $file->getSize() / 1024;
                            $file->move(public_path('storage/uploads'), $filename);
                            Media::create([
                                'model_type' => $model_type,
                                'model_id' => $model->id,
                                'name' => $filename,
                                'type' => 'lesson_pdf',
                                'file_name' => $filename,
                                'size' => $size,
                            ]);
                            $finalRequest = new Request(array_merge($finalRequest->all(), [$key => $filename]));
                        }elseif($key == 'add_audio'){
                            $file = $request->file($key);

                            $filename = time() . '-' . str_slug($file->getClientOriginalName());
                            $size = $file->getSize() / 1024;
                            $file->move(public_path('storage/uploads'), $filename);
                            Media::create([
                                'model_type' => $model_type,
                                'model_id' => $model->id,
                                'name' => $filename,
                                'type' => 'lesson_audio',
                                'file_name' => $filename,
                                'url' => asset('storage/uploads/'.$filename),
                                'size' => $size,
                            ]);
                            $finalRequest = new Request(array_merge($finalRequest->all(), [$key => $filename]));
                        } else{
                            $filename = time() . '-' . str_slug($request->file($key)->getClientOriginalName());
                            $request->file($key)->move(public_path('storage/uploads'), $filename);
                            $finalRequest = new Request(array_merge($finalRequest->all(), [$key => $filename]));
                            $model->lesson_image = $filename;
                            $model->save();
                        }

                    }
                }
            }
        }

        return $finalRequest;
    }

    public function saveLogos(Request $request){
        if (!file_exists(public_path('storage/logos'))) {
            mkdir(public_path('storage/logos'), 0777);
        }
        $finalRequest = $request;

        foreach ($request->all() as $key => $value) {
            if ($request->hasFile($key)) {
                    $filename = time() . '-' . str_slug($request->file($key)->getClientOriginalName());
                    $request->file($key)->move(public_path('storage/logos'), $filename);
                    $finalRequest = new Request(array_merge($finalRequest->all(), [$key => $filename]));

            }
        }

        return $finalRequest;
    }
}