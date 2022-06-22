<?php
include_once __DIR__ . "/../../Router/Router.php";
//include_once __DIR__ . "/../Crawler.novel.php";

include_once __DIR__ . "/../Crawler.php";


$crawler = new \CrawlerModule\CrawlerModule("https://www.zhihu.com/");

$crawler->run();
var_dump($crawler);
/**
 * @done /novel
 * @todo /novel/coverrec
 * @todo /novel/strongrec
 * @todo /novel/sanjiang
 * @done /novel/rank
 * @todo /novel/bookcase
 * @done /novel/info?site={site}&id={id}
 * @done /novel/catalog
 * @done /novel/chapter
 * @done /novel/search
 */
//$qidianRoute = array(
//    "path" => "/novel",
//    "hooks" => array("received" => function ($data) {
//        $data->response->_200(array(
//            "version" => "0.0.1",
//            "datetime" => "2020-09-23",
//            "author" => "langnang",
//        ));
//    }),
//    "children" => array(
//        array(
//            "path" => "/info",
//            "receive_params" => array("site", "id"),
//            "hooks" => array(
//                "beforeRequest" => function (&$data) {
//                    $site = $data->receive_data["site"];
//                    $id = $data->receive_data["id"];
//                    $data->request_data = new NovelController($site, $id);
//                },
//                "requesting" => function ($data) {
//                    $data->request_data->crawlerInfo();
//                }
//            ),
//        ),
//        array(
//            "path" => "/qidian",
//            "hooks" => array(
//                "requesting" => function (&$data) {
//                    $qidian = new QiDianController();
//                    $qidian->crawlerIndex();
//                    $data->request_data = $qidian;
//                },
//                "requested" => function ($data) {
//                    $data->response->_200($data->request_data);
//                }
//            ),
//            "children" => array(
//                array(
//                    "path" => "/coverrec",
//                    "hooks" => array(
//                        "received" => function ($receive_data, $request_data, $response) {
//                            if (!isset($receive_data["date"])) {
//                                $response->_404();
//                                return false;
//                            }
////                    var_dump($receive_data["date"]);
////                    var_dump(date('Y-m-d', strtotime($receive_data["date"])));
//                        },
//                        "requesting" => function ($receive_data, &$request_data, $response) {
//                            $qidian = new QiDianController();
//                            $qidian->crawlerLatestCoverrec();
//                            $request_data = $qidian;
//                        },
//                        "requested" => function ($receive_data, $request_data, $response) {
//                            $response->_200($request_data->coverrec);
//                        },
//                    )
//                ),
//                array(
//                    "path" => "/strongrec",
//                    "hooks" => array(
//                        "received" => function ($receive_data, $request_data, $response) {
//                            if (!isset($receive_data["date"])) {
//                                $response->_404();
//                                return false;
//                            }
////                    var_dump($receive_data["date"]);
////                    var_dump(date('Y-m-d', strtotime($receive_data["date"])));
//                        },
//                        "requesting" => function ($receive_data, &$request_data, $response) {
//                            $qidian = new QiDianController();
//                            $qidian->crawlerLatestStrongrec();
//                            $request_data = $qidian;
//                        },
//                        "requested" => function ($receive_data, $request_data, $response) {
//                            $response->_200($request_data->strongrec);
//                        },
//                    )
//                ),
//                array(
//                    "path" => "/sanjiang",
//                    "hooks" => array(
//                        "received" => function ($receive_data, $request_data, $response) {
//                            if (!isset($receive_data["date"])) {
//                                $response->_404();
//                                return false;
//                            }
////                    var_dump($receive_data["date"]);
////                    var_dump(date('Y-m-d', strtotime($receive_data["date"])));
//                        },
//                        "requesting" => function ($receive_data, &$request_data, $response) {
//                            $qidian = new QiDianController();
//                            $qidian->crawlerLatestSanJiang();
//                            $request_data = $qidian;
//                        },
//                        "requested" => function ($receive_data, $request_data, $response) {
//                            $response->_200($request_data->sanjiang);
//                        },
//                    )
//                ),
//                array(
//                    "path" => "/rank",
//                    "hooks" => array(
//                        "received" => function (&$receive_data, $request_data, $response) {
////                    var_dump($receive_data);
//                            if (!isset($receive_data["rank"])) {
//                                $receive_data["all"] = true;
//                            } else {
//                                $receive_data["all"] = false;
//                            }
//                        },
//                        "requesting" => function (&$receive_data, &$request_data, $response) {
////                    var_dump($receive_data);
//                            $qidian = new QiDianController();
//                            if ($receive_data["all"]) {
//                                $qidian->crawlerRanks();
//                            } else {
//                                if (!isset($qidian->ranks[$receive_data["rank"]])) {
//                                    $receive_data["rank"] = "yuepiao";
//                                }
//                                $page = isset($receive_data["page"]) ? $receive_data["page"] : 1;
//                                $qidian->crawlerRank($receive_data["rank"], $page);
//                            }
//                            $request_data = $qidian;
////                    $response->_200($qidian->rank);
//                        },
//                        "requested" => function ($receive_data, $request_data, $response) {
//                            if ($receive_data["all"]) {
//                                $response->_200($request_data->rank);
//                            } else {
//                                $response->_200($request_data->rank[$receive_data["rank"]]);
//                            }
//                        }
//                    )
//                ),
//                array(
//                    "path" => "/info",
//                    "hooks" => array(
//                        "received" => function ($receive_data, $request_data, $response) {
//                            if (!isset($receive_data["id"])) {
//                                $response->_404("No novel id");
//                                return false;
//                            }
//                        },
//                        "requesting" => function ($receive_data, &$request_data, $response) {
//                            $novel = new NovelController($receive_data["id"]);
//                            $novel->crawlerInfo();
//                            $request_data = $novel;
//                        },
//                        "requested" => function ($receive_data, $request_data, $response) {
//                            $response->_200($request_data);
//                        },
//                    )
//                ),
//                array(
//                    "path" => "/catalog",
//                    "hooks" => array(
//                        "received" => function ($receive_data, $request_data, $response) {
//                            if (!isset($receive_data["id"])) {
//                                $response->_404("No novel id");
//                                return false;
//                            }
//                        },
//                        "requesting" => function ($receive_data, &$request_data, $response) {
//                            $novel = new NovelController($receive_data["id"]);
//                            $novel->crawlerCatalog();
//                            $request_data = $novel;
//                        },
//                        "requested" => function ($receive_data, $request_data, $response) {
//                            $response->_200($request_data);
//                        },
//                    )
//                ),
//                array(
//                    "path" => "/chapter",
//                    "hooks" => array(
//                        "received" => function ($receive_data, $request_data, $response) {
//                            if (!isset($receive_data["free"])) {
//                                $response->_404("No novel id");
//                                return false;
//                            }
//                        },
//                        "requesting" => function ($receive_data, &$request_data, $response) {
//                            $chapter = new NovelChapterController();
//                            $chapter->crawlerContent();
//                            $request_data = $chapter;
//                        },
//                        "requested" => function ($receive_data, $request_data, $response) {
//                            $response->_200($request_data);
//                        },
//                    )
//                ),
//                array(
//                    "path" => "/search",
//                    "hooks" => array(
//                        "received" => function ($receive_data, $request_data, $response) {
//                            if (!isset($receive_data["kw"])) {
//                                $response->_404("No novel id");
//                                return false;
//                            }
//                        },
//                        "requesting" => function ($receive_data, &$request_data, $response) {
//                            $qidian = new QiDianController();
//                            $qidian->crawlerSearch($receive_data["kw"]);
//                            $request_data = $qidian;
//                        },
//                        "requested" => function ($receive_data, $request_data, $response) {
//                            $response->_200($request_data->searches);
//                        },
//                    )
//                ),
//            ),
//        ),
//
//    )
//);
//$routes = array($qidianRoute);
//
//$router = new \RouterModule\RouterModule($routes);