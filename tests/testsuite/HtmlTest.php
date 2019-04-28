<?php

use PHPUnit\Framework\TestCase;
use RyaanAnthony\ContentBuilder\HtmlModel;
use RyaanAnthony\ContentBuilder\HtmlViewModel;

class HtmlTest extends TestCase
{
  public function testHtml()
  {
    $model = new HtmlModel('Example HTML');

    $viewModel = new HtmlViewModel($model);

    $this->assertStringContainsString('Example HTML', $viewModel->getHtml());
  }
}
