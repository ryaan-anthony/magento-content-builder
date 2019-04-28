<?php

namespace RyaanAnthony\ContentBuilder;

class HtmlViewModel
{
  /**
   * Instantiate the view model
   *
   * @param IModel $model
   */
  function __construct(IModel $model)
  {
    $this->model = $model;
  }

  /**
   * Get HTML body
   *
   * @return string
   */
  public function getHtml()
  {
    return "<div>{$this->model->toString()}</div>";
  }
}
