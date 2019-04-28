<?php

namespace RyaanAnthony\ContentBuilder;

class HtmlModel implements IModel
{
  protected $body;

  function __construct(string $body)
  {
    $this->body = $body;
  }

  /**
   * Get the body string
   *
   * @return string
   */
  public function toString()
  {
    return $this->body;
  }
}
