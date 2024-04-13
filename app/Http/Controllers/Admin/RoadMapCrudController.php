<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use App\Models\RoadMap;

/**
 * Class RoadMapCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class RoadMapCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\RoadMap::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/road-map');
        CRUD::setEntityNameStrings('road map', 'road maps');
    }

    //public function show($id)
    //{
//
    //    $this->crud->hasAccessOrFail('show');
//
    //    // get entry ID from Request (makes sure its the last ID for nested resources)
    //    $id = $this->crud->getCurrentEntryId() ?? $id;
//
    //    // get the info for that entry (include softDeleted items if the trait is used)
    //    if ($this->crud->get('show.softDeletes') && in_array('Illuminate\Database\Eloquent\SoftDeletes', class_uses($this->crud->model))) {
    //        $this->data['entry'] = $this->crud->getModel()->withTrashed()->findOrFail($id);
    //    } else {
    //        $this->data['entry'] = $this->crud->getEntryWithLocale($id);
    //    }
//
    //    $this->data['crud'] = $this->crud;
    //    $this->data['title'] = $this->crud->getTitle() ?? trans('backpack::crud.preview').' '.$this->crud->entity_name;
//
    //    //$roadMap = $this->crud;
//
    //    //$roadMap = RoadMap::findOrFail($id);
    //    //$tasks = $roadMap->tasks()->paginate();
//
    //    return view('admin.roadmap.tasks', $this->data);
    //}
//
    //public function showTasks($id)
    //{
    //    $roadMap = RoadMap::findOrFail($id);
    //    $tasks = $roadMap->tasks()->paginate(); // You can modify this as needed
//
    //    return view('admin.roadmap.tasks', compact('roadMap', 'tasks'));
    //}

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::setFromDb(); // set columns from db columns.

        /**
         * Columns can be defined using the fluent syntax:
         * - CRUD::column('price')->type('number');
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setFromDb(); // set fields from db columns.

        /**
         * Fields can be defined using the fluent syntax:
         * - CRUD::field('price')->type('number');
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
