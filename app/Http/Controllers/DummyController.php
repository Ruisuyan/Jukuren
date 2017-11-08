<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DummyController extends Controller{
    public function add(Request $request) {
        $timeTable = $data['timeTable'] = $this->timeTableService->find($request->all());
        try{
            $file = $request->file('filefield');
            $extension = $file->getClientOriginalExtension();
    
            $entries = Fileentry::all();
            foreach ($entries as $entry){
                if($entry->original_filename == $file->getClientOriginalName()){
                    return redirect('/myCourses/evidences/upload?id='.$timeTable->IdHorario)->with('error', 'Evidencia repetida');
                }
            }
            Storage::disk('local')->put($file->getFilename().'.'.$extension,  File::get($file));
            $entry = new Fileentry();
            $entry->mime = $file->getClientMimeType();
            $entry->original_filename = $file->getClientOriginalName();
            $entry->filename = $file->getFilename().'.'.$extension;
            $entry->save();
    
            $courseEvidence = new CourseEvidence();
            $courseEvidence->IdArchivoEntrada = $entry->IdArchivoEntrada;
            $courseEvidence->IdHorario = $timeTable->IdHorario;
            $courseEvidence->save();
        } catch(\Exception $e){
            dd($e);
        }
        return redirect('/myCourses/evidences/upload?id='.$timeTable->IdHorario)->with('success', 'La evidencia se ha cargado exitosamente');
        //return view('evidences.upload', $data);
    }
}


