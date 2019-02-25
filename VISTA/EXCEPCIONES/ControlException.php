<?php

class ControlException extends Exception {
  private $lugar;
  public function __construct(string $message, int $code, $lugar) {
      parent::__construct($message, $code, $lugar);
  }

  public function __toString(): string {
      return parent::__toString();
  }

}
