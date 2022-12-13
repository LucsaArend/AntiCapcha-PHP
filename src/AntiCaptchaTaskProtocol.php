<?php

namespace AntiCaptcha;

interface AntiCaptchaTaskProtocol {

public function getPostData();
public function getTaskSolution();

}
