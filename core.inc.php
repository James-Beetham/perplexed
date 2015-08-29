<?php

ob_start();
session_start();

if (isset($_SESSION['user']['rank']) && @!empty($_SESSION['user']['rank'])) {
	$rank = $_SESSION['user']['rank'];
}

// $redirect must be full url, and $specific_rank must be true if specified
function logged_in($rank_req, $redirect, $specific_rank = false) {
	if (isset($_SESSION['user']['rank']) && @!empty($_SESSION['user']['rank'])) {
		$rank = $_SESSION['user']['rank'];
		if ($rank > $rank_req) {
			header('Location: '.$redirect);	
		} else if ($rank < $rank_req && $specific_rank) {
			header('Location: '.$redirect);
		}
	} else if ($rank_req != 6) {
			header('Location: '.$redirect);
		}
	}
}

function header($user_rank) {



}
