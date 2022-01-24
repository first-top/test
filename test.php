<?php
  if (!getallheaders()["fast-quiz"] || getallheaders()["fast-quiz"] !== "new-action") die();
  $data = json_decode(file_get_contents("php://input"));
  $skillsCount = 0;
  $maxSkillsCount = count((array)$data->skills);
  $senderID = $data->senderId;
  $skillsArr = array();
//  $addresses = ["kd@ft10.ru"];
  $addresses = array(
    "test-ft-10" => ["az@ft10.ru", "support@ft10.ru","kd@ft10.ru"],
    "test-new" => ["az@ft10.ru",]
  );
  
//  echo "<pre>", print_r((array)$data->skills), "</pre>";
//  echo "<pre>", var_dump(count((array)$data->skills)), "</pre>";
  
  function getResultMessage($percent) {
    if ((int)$percent >= 90 ) return "Набран высокий балл, рекомендуем кандидата на должность";
    if ((int)$percent >= 70 ) return "Рекомендуем рассмотреть кандидата на должность";
    if ((int)$percent >= 60 ) return "Рекомендуем кандидата, но следует выполнить практическое задание";
    return "Не рекомендуем";
  }
  
  $message = "";
//  $message .= "
//    <tr>
//    <td style='text-align: center; padding: 10px; border: #e9e9e9 1px solid;'>$messageTitle</td>
//    </tr>
//  ";
//  $message .= "
//    <tr>
//    <td style='padding: 10px; border: #e9e9e9 1px solid;'>email: $data->email</td>
//    </tr>
//  ";
  $message .= "
    <tr>
    <td style='padding: 10px; border: #e9e9e9 1px solid;'>Телефон: $data->phone</td>
    </tr>
  ";
  $message .= "
    <tr>
    <td style='padding: 10px; border: #e9e9e9 1px solid;'>telegram: $data->telegram</td>
    </tr>
  ";
  
  
  foreach($data->skills as $skill) {
//    switch($skill->score) {
//      case "low":
//        break;
//      case "lower":
//        $skillsCount += 1;
//        break;
//      case "higher":
//        $skillsCount += 2;
//        break;
//      case "high":
//        $skillsCount += 3;
//        break;
//    }
    if ($skill->score !== "low") {
      $skillsArr[] = $skill;
      $skillsCount += 1;
    }
  }
  
  echo "<pre>", print_r($skillsArr, true), "</pre>";
  echo "<pre>", print_r($skillsCount, true), "</pre>";
  
  $answers = array(
    "answers_vk" => array(
      "pay-models" => array(
        "value" => ["pay-models-clicks", "pay-models-shows", "pay-models-auto"],
        "score" => 2
      ),
      "minimal-volume" => array(
        "value" => "minimal-volume-100",
        "score" => 1
      ),
      "minimal-distance" => array(
        "value" => "minimal-distance-500",
        "score" => 0
      ),
      "settings-save" => array(
        "value" => ["settings-save-all"],
        "score" => 1
      ),
      "max-peoples" => array(
        "value" => "max-peoples-before-100",
        "score" => 2
      ),
      "emoji" => array(
        "value" => "emoji-12",
        "score" => 1
      ),
      "minimal-cost" => array(
        "value" => "minimal-cost-30",
        "score" => 1
      ),
      "settings-budget" => array(
        "value" => "settings-budget-clicks-day",
        "score" => 2
      ),
      "universal" => array(
        "value" => ["universal-auction", "universal-click", "universal-ctr"],
        "score" => 2
      ),
    ),
    "answers_fb" => array(
      "ad-format" => array(
        "value" => "ad-format-individual",
        "score" => 1
      ),
      "what-target" => array(
        "value" => "what-target-scope",
        "score" => 1
      ),
      "media-plan" => array(
        "value" => "media-plan-by-result",
        "score" => 1
      ),
      "ad-rus" => array(
        "value" => ["ad-rus-top", "ad-rus-moscow", "ad-rus-travel"],
        "score" => 2
      ),
      "pay-for-show" => array(
        "value" => "pay-for-show-5",
        "score" => 2
      ),
      "min-budget" => array(
        "value" => "min-budget-500",
        "score" => 3
      ),
      "max-interest" => array(
        "value" => "max-interest-5",
        "score" => 3
      ),
      "min-distance" => array(
        "value" => "min-distance-1",
        "score" => 3
      ),
      "training" => array(
        "value" => "training-lid",
        "score" => 1
      ),
      "facebook" => array(
        "value" => "facebook-20%",
        "score" => 1
      ),
      "success-projects" => array(
        "value" => "",
        "score" => 0
      ),
    
    
    )
  );
  $scoreVK = 0;
  $scoreFB = 0;
  $maxScoreVK = 0;
  $maxScoreFB = 0;
  $samePercentVK = 0;
  $samePercentFB = 0;
  $messageVK = "";
  $messageFB = "";
  $score = 0;
  $socialMaxScore = 0;
  $count = 0;
  $currentAnswers = null;
  $skills = array();
  $c = false;
//  if ($data->currentSocial === "fb")
//    $currentAnswers = $answers["answers_fb"];
//  if ($data->currentSocial === "vk")
//    $currentAnswers = $answers["answers_vk"];
//  if (!$currentAnswers) {
//    echo "нет соц сети";
//    die();
//  }



//  $message .= "
//    " . (($c = !$c) ? '<tr>' : '<tr style="background-color: #f8f8f8;">') . "
//				<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Почта кандидата</b></td>
//				<td style='padding: 10px; border: #e9e9e9 1px solid;'>$data->email</td>
//			</tr>
//    ";
//  $message .= "
//    " . (($c = !$c) ? '<tr>' : '<tr style="background-color: #f8f8f8;">') . "
//				<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Ник в телеграм</b></td>
//				<td style='padding: 10px; border: #e9e9e9 1px solid;'>$data->(telegram-nickname)</td>
//			</tr>
//    ";
//  echo "<pre>", print_r($currentAnswers), "</pre>";
  if ($data->social_vk) {
    foreach($answers["answers_vk"] as $key => $ans) {
      if (is_array($ans["value"])) {
        if (!array_diff($ans["value"], $data->social_vk->$key) && array_diff($ans["value"], $data->social_vk->$key) !== null) {
//          $count++;
          $scoreVK += (int)$ans["score"];
        }
      } else {
        if ($ans["value"] === $data->social_vk->$key) {
//          $count++;
          $scoreVK += (int)$ans["score"];
        }
      }
    $maxScoreVK += (int)$ans["score"];
    }
    $message .= "
      <tr>
        <td style='text-align: center; padding: 10px; border: #e9e9e9 1px solid;'>Пройден тест таргетолога ВК</td>
      </tr>
    ";
    $a = round(0.7*($scoreVK*100/$maxScoreVK));
    $b = round(0.3*($skillsCount*100/$maxSkillsCount));
    $samePercentVK = $a + $b;
    $messageVK = getResultMessage($samePercentVK);
    if ($scoreVK > 6 && $skillsCount > 9) {
      echo "Сдал";
      
//      echo "<pre>", print_r($samePercentVK, true), "</pre>";
//      echo "<pre>", print_r("max VK ", true), print_r($maxScoreVK, true), "</pre>";
//      echo "<pre>", print_r("current VK ", true), print_r($score, true), "</pre>";
//      echo "<pre>", print_r("max skills ", true), print_r($maxSkillsCount, true), "</pre>";
//      echo "<pre>", print_r("current skills ", true), print_r($skillsCount, true), "</pre>";
//
//      echo "<pre>", print_r("soc 0.7 ", true), print_r(round(0.7*($score*100/$socialMaxScore)), true), "</pre>";
//      echo "<pre>", print_r("skills 0.3 ", true), print_r(round(0.3*($skillsCount*100/$maxSkillsCount)), true), "</pre>";
//      echo "<pre>", print_r(round(0.7*($score*100/$socialMaxScore))), "</pre>";
//      echo "<pre>", print_r(round(0.3*($skillsCount*100/$maxSkillsCount))), "</pre>";
//      $a = round(0.7*($score*100/$socialMaxScore));
//      $b = round(0.3*($skillsCount*100/$maxSkillsCount));
//      $samePercent = round(0.7*($score*100/$socialMaxScore)) + round(0.3*($skillsCount*100/$maxSkillsCount));
//      echo "<pre>", print_r("after sum ", true), print_r($samePercent, true), "</pre>";
      $message .= "
      " . '<tr>' . "
          <td style='text-align: center; padding: 10px; border: #e9e9e9 1px solid;'><b>Набранный балл: $samePercentVK / 100</b></td>
        </tr>
      ";
      $message .= "
      <tr>
        <td style='text-align: center; padding: 10px; border: #e9e9e9 1px solid;'>$messageVK</td>
      </tr>
    ";
    } else {
      echo "Не сдал";
     
      $message .= "
      " . '<tr>' . "
          <td style='text-align: center; padding: 10px; border: #e9e9e9 1px solid;'><b>Набранный балл: $samePercentVK / 100</b></td>
        </tr>
      ";
      $message .= "
        <tr>
          <td style='text-align: center; padding: 10px; border: #e9e9e9 1px solid;'>Не рекомендуем данного кандидата</td>
        </tr>
      ";
    }
  }
  
  if ($data->social_fb) {
    $successProjects = "";
    foreach($answers["answers_fb"] as $key => $ans) {
      if (is_array($ans["value"])) {
        if (!array_diff($ans["value"], $data->social_fb->$key) && array_diff($ans["value"], $data->social_fb->$key) !== null) {
//          $count++;
          $scoreFB += (int)$ans["score"];
        }
      } else {
        if ($ans["value"] === $data->social_fb->$key) {
//          $count++;
          $scoreFB += (int)$ans["score"];
        }
      }
      if ($key === "success-projects") {
        echo $data->social_fb->$key;
        echo "<pre>", print_r(123213312), "</pre>";
        ($data->social_fb->$key === "success-projects-no")
        ? $successProjects = "Менеe 10 успешных проектов"
        : $successProjects = "Более 10 успешных проектов";
      }
    $maxScoreFB += (int)$ans["score"];
    }
    $message .= "
      <tr>
        <td style='text-align: center; padding: 10px; border: #e9e9e9 1px solid;'>Пройден тест таргетолога ФБ</td>
      </tr>
    ";
    $a = round(0.7*($scoreFB*100/$maxScoreFB));
    $b = round(0.3*($skillsCount*100/$maxSkillsCount));
    $samePercentFB = $a + $b;
    if ($scoreFB > 9 && $skillsCount > 9) {
      
      echo "Сдал";
      echo "<pre>", print_r($samePercentFB, true), "</pre>";
      $messageFB = getResultMessage($samePercentFB);
      $message .= "
      " . '<tr>' . "
          <td style='text-align: center; padding: 10px; border: #e9e9e9 1px solid;'><b>Набранный балл: $samePercentFB / 100</b></td>
        </tr>
      ";
      $message .= "
      " . '<tr>' . "
          <td style='text-align: center; padding: 10px; border: #e9e9e9 1px solid;'><b>$successProjects</b></td>
          
        </tr>
      ";
      $message .= "
      <tr>
        <td style='text-align: center; padding: 10px; border: #e9e9e9 1px solid;'>$messageFB</td>
      </tr>
    ";
    } else {
      echo "Не сдал";
      
      $message .= "
      " . '<tr>' . "
          <td style='text-align: center; padding: 10px; border: #e9e9e9 1px solid;'><b>Набранный балл: $samePercentFB / 100</b></td>
        </tr>
      ";
      $message .= "
        <tr>
          <td style='text-align: center; padding: 10px; border: #e9e9e9 1px solid;'>Не рекомендуем данного кандидата</td>
        </tr>
      ";
    }
  }
  
//  foreach($currentAnswers as $key => $ans) {
//    if (is_array($ans["value"])) {
//      if (!array_diff($ans["value"], $data->social->$key) && array_diff($ans["value"], $data->social->$key) !== null) {
//        $count++;
//        $score += (int)$ans["score"];
//      }
//    } else {
//      if ($ans["value"] === $data->social->$key) {
//        $count++;
//        $score += (int)$ans["score"];
//      }
//    }
//    $socialMaxScore += (int)$ans["score"];
//  }
//  $samePercent = 0;
//  $a = null;
//  $b = null;
//  if ($data->currentSocial === "fb") {
//    if ($score > 9 && $skillsCount > 9) {
//      $a = round(0.7*($score*100/$socialMaxScore));
//      $b = round(0.3*($skillsCount*100/$maxSkillsCount));
//      $samePercent = round(0.7*($score*100/$socialMaxScore)) + round(0.3*($skillsCount*100/$maxSkillsCount));
//      echo "Сдал";
//    } else {
//      echo "Не сдал";
//    }
//  }
//  echo "<pre>", var_dump($skillsCount), "</pre>";
//  if ($data->currentSocial === "vk") {
//    echo "<pre>", print_r($maxSkillsCount), "</pre>";
//    echo "<pre>", print_r($skillsCount), "</pre>";
//    if ($score > 6 && $skillsCount > 9) {
//      echo "<pre>", print_r("max VK ", true), print_r($socialMaxScore, true), "</pre>";
//      echo "<pre>", print_r("current VK ", true), print_r($score, true), "</pre>";
//      echo "<pre>", print_r("max skills ", true), print_r($maxSkillsCount, true), "</pre>";
//      echo "<pre>", print_r("current skills ", true), print_r($skillsCount, true), "</pre>";
//
//      echo "<pre>", print_r("soc 0.7 ", true), print_r(round(0.7*($score*100/$socialMaxScore)), true), "</pre>";
//      echo "<pre>", print_r("skills 0.3 ", true), print_r(round(0.3*($skillsCount*100/$maxSkillsCount)), true), "</pre>";
//      echo "<pre>", print_r(round(0.7*($score*100/$socialMaxScore))), "</pre>";
//      echo "<pre>", print_r(round(0.3*($skillsCount*100/$maxSkillsCount))), "</pre>";
//      $a = round(0.7*($score*100/$socialMaxScore));
//      $b = round(0.3*($skillsCount*100/$maxSkillsCount));
//      $samePercent = round(0.7*($score*100/$socialMaxScore)) + round(0.3*($skillsCount*100/$maxSkillsCount));
//      echo "<pre>", print_r("after sum ", true), print_r($samePercent, true), "</pre>";
//      echo "Сдал";
//    } else {
//      echo "Не сдал";
//    }
//  }

//  $messageTitle = "";
//  if ($samePercent < 60 ) $messageTitle = "Не рекомендуем";
//  if ($samePercent >= 60 ) $messageTitle = "Рекомендуем, но кандидату следует выполнить практическое задание";
//  if ($samePercent >= 70 ) $messageTitle = "Рекомендуем рассмотреть кандидата на должность";
//  if ($samePercent >= 90 ) $messageTitle = "Набран высокий балл, рекомендуем кандидата на должность";

//    $message .= "
//    " . (($c = !$c) ? '<tr>' : '<tr style="background-color: #f8f8f8;">') . "
//				<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>max $data->currentSocial</b></td>
//				<td style='padding: 10px; border: #e9e9e9 1px solid;'>$socialMaxScore</td>
//			</tr>
//    ";
//  $message .= "
//    " . (($c = !$c) ? '<tr>' : '<tr style="background-color: #f8f8f8;">') . "
//				<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>current $data->currentSocial</b></td>
//				<td style='padding: 10px; border: #e9e9e9 1px solid;'>$score</td>
//			</tr>
//    ";
//  $message .= "
//    " . (($c = !$c) ? '<tr>' : '<tr style="background-color: #f8f8f8;">') . "
//				<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>max skills </b></td>
//				<td style='padding: 10px; border: #e9e9e9 1px solid;'>$maxSkillsCount</td>
//			</tr>
//    ";
//  $message .= "
//    " . (($c = !$c) ? '<tr>' : '<tr style="background-color: #f8f8f8;">') . "
//				<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>current skills</b></td>
//				<td style='padding: 10px; border: #e9e9e9 1px solid;'>$skillsCount</td>
//			</tr>
//    ";
//  $message .= "
//    " . (($c = !$c) ? '<tr>' : '<tr style="background-color: #f8f8f8;">') . "
//				<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>social 0.7</b></td>
//				<td style='padding: 10px; border: #e9e9e9 1px solid;'>$a</td>
//			</tr>
//    ";
//  $message .= "
//    " . (($c = !$c) ? '<tr>' : '<tr style="background-color: #f8f8f8;">') . "
//				<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>skills 0.3</b></td>
//				<td style='padding: 10px; border: #e9e9e9 1px solid;'>$b</td>
//			</tr>
//    ";
//  $message .= "
//    " . (($c = !$c) ? '<tr>' : '<tr style="background-color: #f8f8f8;">') . "
//				<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>summ</b></td>
//				<td style='padding: 10px; border: #e9e9e9 1px solid;'>$samePercent</td>
//			</tr>
//    ";
  $message = "<table style='width: 300px'>$message</table>";
  function adopt($text) {
    return '=?UTF-8?B?' . Base64_encode($text) . '?=';
  }
  
//  az@ft10.ru, support@ft10.ru
  
  $headers = "MIME-Version: 1.0" . PHP_EOL .
    "Content-Type: text/html; charset=utf-8" . PHP_EOL .
    'From: ' . adopt("test") . ' <' . "kd@ft10.ru" . '>' . PHP_EOL .
    'Reply-To: ' . "kd@ft10.ru" . '' . PHP_EOL;
//  mail("az@ft10.ru", "test", $message, $headers);
//  mail("support@ft10.ru", "test", $message, $headers);
  if ($addresses[$senderID]) {
    foreach($addresses[$senderID] as $address){
      mail($address, "test", $message, $headers);
    }
  } else {
    echo "no-sender";
    die();
  }


//  0,7*fb/vk(% от общего кол-ва баллов)+0,3*компетенции(%от общего кол-ва баллов)
//  =ЕСЛИ(C4>8;0*C7;ЕСЛИ(C5+C6<5;0*C7;ЕСЛИ(C4<5;ЕСЛИ(C5+C6>11;1*C7;0,5*C7);0,5*C7)))
//    =(C10/23)*C11
//  foreach($data->skills as $skill) {
//    $skills[] = array(
//      "title" => $skill->title,
//      "score" => $skill->score,
//    );
//  }





//  echo "<pre>", var_dump($count), "</pre>";
//  echo "<pre>", print_r(2222), "</pre>";

//  echo json_encode($answers);

//  echo "<pre>", print_r(getallheaders()), "</pre>";











