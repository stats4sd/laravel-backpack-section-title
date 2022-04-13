<?php

protected function setupCreateOperation()
{
  
  CRUD::addField([
      'name' => 'field_name',
      'type' => 'section-title',
      'title' => 'Section Title without a content property',
      'view_namespace' => 'stats4sd.laravel-backpack-section-title::fields',
  ]);

  CRUD::field('question 1');
  CRUD::field('question 2');
  CRUD::field('question 3');

  CRUD::addField([
      'name' => 'field_name2',
      'type' => 'section-title',
      'title' => 'Sub Heading',
      'content' => 'Some information for the, to be displayed inside a callout box. This section-title has a title, content and divider = true.',
      'variant' => 'info',
      'divider' => true,
      'view_namespace' => 'stats4sd.laravel-backpack-section-title::fields',
  ]);

  CRUD::field('question 1 for new section');
  CRUD::field('question 2 for new section');

  CRUD::addField([
      'name' => 'warning',
      'type' => 'section-title',
      'variant' => 'danger',
      'content' => 'NOTE: This example has no title property, and the variant = "danger" to highlight this very important information.',
      'view_namespace' => 'stats4sd.laravel-backpack-section-title::fields',
  ]);

  CRUD::field('final question');
}
