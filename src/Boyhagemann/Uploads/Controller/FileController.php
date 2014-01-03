<?php

namespace Boyhagemann\Uploads\Controller;

use Boyhagemann\Crud\CrudController;
use Boyhagemann\Form\FormBuilder;
use Boyhagemann\Model\ModelBuilder;
use Boyhagemann\Overview\OverviewBuilder;

class FileController extends CrudController
{
	/**
     * @param FormBuilder $fb
     */
    public function buildForm(FormBuilder $fb)
    {
        $fb->image('path')->label('File');
        $fb->hidden('name')->label('Name');
        $fb->hidden('extension')->label('Extension');
        $fb->hidden('size')->label('Size');
    }

    /**
     * @param ModelBuilder $mb
     */
    public function buildModel(ModelBuilder $mb)
    {
        $mb->name('Boyhagemann\Uploads\Model\File')->table('files');
    }

    /**
     * @param OverviewBuilder $ob
     */
    public function buildOverview(OverviewBuilder $ob)
    {
    }

}

