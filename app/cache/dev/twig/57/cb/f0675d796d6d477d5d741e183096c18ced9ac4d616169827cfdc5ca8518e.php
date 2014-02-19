<?php

/* SensioDistributionBundle:Configurator:final.html.twig */
class __TwigTemplate_57cbf0675d796d6d477d5d741e183096c18ced9ac4d616169827cfdc5ca8518e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SensioDistributionBundle::Configurator/layout.html.twig");

        $this->blocks = array(
            'content_class' => array($this, 'block_content_class'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content_class($context, array $blocks = array())
    {
        echo "config_done";
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "    <div class=\"step\">
        <h1>Well done!</h1>
        ";
        // line 7
        if ((isset($context["is_writable"]) ? $context["is_writable"] : $this->getContext($context, "is_writable"))) {
            // line 8
            echo "        <h2>Your distribution is configured!</h2>
        ";
        } else {
            // line 10
            echo "        <h2 class=\"configure-error\">Your distribution is almost configured but...</h2>
        ";
        }
        // line 12
        echo "        <h3>
            <span>
                ";
        // line 14
        if ((isset($context["is_writable"]) ? $context["is_writable"] : $this->getContext($context, "is_writable"))) {
            // line 15
            echo "                    Your parameters.yml file has been overwritten with these parameters (in <em>";
            echo twig_escape_filter($this->env, (isset($context["yml_path"]) ? $context["yml_path"] : $this->getContext($context, "yml_path")), "html", null, true);
            echo "</em>):
                ";
        } else {
            // line 17
            echo "                    Your parameters.yml file is not writeable! Here are the parameters you can copy and paste in <em>";
            echo twig_escape_filter($this->env, (isset($context["yml_path"]) ? $context["yml_path"] : $this->getContext($context, "yml_path")), "html", null, true);
            echo "</em>:
                ";
        }
        // line 19
        echo "            </span>
        </h3>

        <textarea class=\"symfony-configuration\">";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "html", null, true);
        echo "</textarea>

        ";
        // line 24
        if ((isset($context["welcome_url"]) ? $context["welcome_url"] : $this->getContext($context, "welcome_url"))) {
            // line 25
            echo "            <ul>
                <li><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, (isset($context["welcome_url"]) ? $context["welcome_url"] : $this->getContext($context, "welcome_url")), "html", null, true);
            echo "\">Go to the Welcome page</a></li>
            </ul>
        ";
        }
        // line 29
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:final.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  20 => 1,  349 => 323,  439 => 195,  431 => 189,  429 => 188,  415 => 180,  401 => 172,  394 => 168,  348 => 140,  289 => 113,  286 => 112,  275 => 105,  270 => 102,  256 => 96,  668 => 344,  651 => 337,  644 => 335,  631 => 327,  626 => 325,  613 => 320,  602 => 317,  591 => 309,  585 => 307,  581 => 305,  577 => 303,  569 => 300,  563 => 298,  552 => 293,  548 => 292,  545 => 291,  533 => 284,  531 => 283,  499 => 268,  497 => 267,  489 => 262,  479 => 256,  473 => 254,  471 => 253,  463 => 248,  454 => 244,  448 => 240,  436 => 235,  422 => 184,  418 => 224,  410 => 221,  397 => 213,  383 => 207,  329 => 131,  304 => 181,  205 => 108,  389 => 160,  386 => 159,  378 => 157,  367 => 198,  361 => 333,  343 => 146,  331 => 140,  326 => 138,  296 => 121,  155 => 47,  152 => 46,  810 => 492,  807 => 491,  792 => 488,  788 => 486,  775 => 485,  727 => 476,  706 => 473,  698 => 471,  690 => 469,  682 => 467,  679 => 466,  677 => 465,  660 => 340,  634 => 456,  629 => 326,  625 => 453,  622 => 323,  620 => 451,  606 => 318,  601 => 446,  567 => 414,  549 => 411,  532 => 410,  170 => 96,  175 => 58,  357 => 123,  353 => 193,  351 => 141,  327 => 114,  324 => 113,  318 => 111,  306 => 107,  303 => 122,  291 => 102,  265 => 105,  185 => 66,  97 => 41,  127 => 35,  507 => 4,  505 => 270,  465 => 249,  462 => 202,  441 => 196,  420 => 160,  416 => 158,  412 => 222,  406 => 153,  404 => 152,  392 => 145,  380 => 160,  358 => 151,  352 => 119,  340 => 145,  334 => 141,  321 => 135,  319 => 99,  280 => 92,  237 => 70,  234 => 69,  232 => 88,  195 => 53,  1408 => 419,  1400 => 416,  1383 => 412,  1380 => 411,  1367 => 405,  1361 => 403,  1355 => 401,  1353 => 400,  1351 => 399,  1341 => 397,  1339 => 396,  1336 => 395,  1323 => 389,  1317 => 387,  1311 => 385,  1309 => 384,  1307 => 383,  1303 => 382,  1297 => 381,  1291 => 380,  1287 => 379,  1283 => 378,  1279 => 377,  1273 => 376,  1251 => 368,  1249 => 367,  1246 => 366,  1237 => 360,  1231 => 358,  1223 => 356,  1211 => 349,  1202 => 347,  1190 => 343,  1187 => 342,  1179 => 338,  1177 => 337,  1174 => 336,  1162 => 330,  1159 => 329,  1157 => 328,  1154 => 327,  1145 => 322,  1143 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1098 => 313,  1095 => 312,  1084 => 307,  1067 => 299,  1064 => 298,  1056 => 293,  1053 => 292,  1036 => 284,  1032 => 283,  1029 => 282,  1027 => 281,  1024 => 280,  1014 => 272,  1012 => 271,  1009 => 270,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  955 => 252,  947 => 249,  939 => 243,  936 => 242,  934 => 241,  931 => 240,  923 => 236,  920 => 235,  918 => 234,  915 => 233,  903 => 229,  900 => 228,  897 => 227,  894 => 226,  892 => 225,  889 => 224,  881 => 220,  878 => 219,  876 => 218,  873 => 217,  865 => 213,  862 => 212,  860 => 211,  857 => 210,  849 => 206,  846 => 205,  841 => 203,  833 => 199,  830 => 198,  828 => 197,  825 => 196,  817 => 192,  801 => 185,  798 => 184,  796 => 489,  793 => 182,  785 => 178,  783 => 177,  780 => 176,  772 => 172,  769 => 171,  767 => 170,  756 => 165,  749 => 479,  746 => 478,  739 => 156,  724 => 154,  715 => 151,  712 => 150,  710 => 475,  707 => 148,  696 => 140,  695 => 139,  689 => 137,  683 => 135,  680 => 134,  662 => 125,  654 => 123,  649 => 462,  643 => 120,  640 => 334,  638 => 118,  619 => 113,  617 => 112,  614 => 111,  598 => 107,  593 => 310,  564 => 99,  557 => 295,  555 => 95,  529 => 409,  527 => 281,  524 => 90,  515 => 276,  512 => 84,  509 => 272,  503 => 81,  496 => 79,  490 => 1,  478 => 74,  470 => 180,  467 => 72,  464 => 71,  459 => 246,  456 => 68,  450 => 64,  442 => 62,  433 => 60,  428 => 230,  426 => 164,  403 => 48,  400 => 214,  388 => 143,  385 => 41,  377 => 137,  371 => 156,  366 => 33,  363 => 153,  344 => 321,  332 => 116,  316 => 16,  313 => 183,  311 => 14,  308 => 13,  299 => 8,  293 => 120,  288 => 176,  281 => 114,  276 => 111,  271 => 86,  266 => 366,  263 => 95,  260 => 363,  255 => 101,  253 => 100,  250 => 341,  248 => 94,  245 => 72,  222 => 83,  215 => 280,  212 => 78,  210 => 77,  207 => 75,  202 => 94,  197 => 71,  194 => 70,  184 => 101,  129 => 148,  124 => 27,  2739 => 857,  2730 => 856,  2728 => 855,  2725 => 854,  2707 => 850,  2700 => 849,  2697 => 848,  2694 => 847,  2691 => 846,  2688 => 845,  2686 => 844,  2683 => 843,  2659 => 839,  2634 => 838,  2632 => 837,  2629 => 836,  2617 => 831,  2614 => 830,  2611 => 829,  2608 => 828,  2605 => 827,  2602 => 826,  2599 => 825,  2596 => 824,  2593 => 823,  2590 => 822,  2587 => 821,  2584 => 820,  2581 => 819,  2578 => 818,  2575 => 817,  2572 => 816,  2569 => 815,  2564 => 814,  2562 => 813,  2559 => 812,  2550 => 806,  2544 => 804,  2541 => 803,  2536 => 802,  2534 => 801,  2531 => 800,  2525 => 796,  2521 => 794,  2519 => 793,  2516 => 792,  2507 => 790,  2503 => 789,  2496 => 788,  2492 => 786,  2489 => 785,  2487 => 784,  2484 => 783,  2481 => 782,  2478 => 781,  2476 => 780,  2473 => 779,  2470 => 778,  2467 => 777,  2465 => 776,  2462 => 775,  2454 => 771,  2451 => 770,  2448 => 769,  2445 => 768,  2437 => 764,  2435 => 763,  2432 => 762,  2423 => 757,  2420 => 756,  2414 => 754,  2411 => 753,  2405 => 751,  2402 => 750,  2396 => 748,  2393 => 747,  2387 => 745,  2385 => 744,  2382 => 743,  2376 => 741,  2373 => 740,  2371 => 739,  2368 => 738,  2359 => 733,  2357 => 732,  2333 => 731,  2330 => 730,  2327 => 729,  2324 => 728,  2322 => 727,  2319 => 726,  2313 => 724,  2311 => 723,  2308 => 722,  2302 => 720,  2300 => 719,  2297 => 718,  2291 => 716,  2289 => 715,  2286 => 714,  2280 => 712,  2278 => 711,  2275 => 710,  2269 => 708,  2266 => 707,  2264 => 706,  2261 => 705,  2258 => 704,  2255 => 703,  2252 => 702,  2249 => 701,  2246 => 700,  2243 => 699,  2241 => 698,  2238 => 697,  2231 => 693,  2227 => 692,  2222 => 691,  2220 => 690,  2217 => 689,  2210 => 684,  2207 => 683,  2199 => 677,  2197 => 676,  2192 => 674,  2189 => 673,  2178 => 671,  2175 => 670,  2173 => 669,  2170 => 668,  2167 => 667,  2165 => 666,  2162 => 665,  2159 => 664,  2156 => 663,  2153 => 662,  2150 => 661,  2147 => 660,  2144 => 659,  2141 => 658,  2138 => 657,  2135 => 656,  2132 => 655,  2129 => 654,  2127 => 653,  2124 => 652,  2121 => 651,  2118 => 650,  2116 => 649,  2113 => 648,  2104 => 643,  2101 => 642,  2098 => 641,  2095 => 640,  2092 => 639,  2089 => 638,  2087 => 637,  2084 => 636,  2075 => 631,  2071 => 629,  2065 => 627,  2063 => 626,  2058 => 625,  2052 => 623,  2050 => 622,  2045 => 621,  2042 => 620,  2039 => 619,  2036 => 618,  2033 => 617,  2030 => 616,  2027 => 615,  2024 => 614,  2021 => 613,  2018 => 612,  2015 => 611,  2012 => 610,  2009 => 609,  2007 => 608,  2004 => 607,  1997 => 603,  1993 => 601,  1988 => 599,  1984 => 598,  1980 => 597,  1975 => 596,  1969 => 593,  1965 => 592,  1961 => 591,  1955 => 590,  1950 => 589,  1948 => 588,  1941 => 587,  1938 => 586,  1935 => 585,  1932 => 584,  1929 => 583,  1927 => 582,  1924 => 581,  1921 => 580,  1919 => 579,  1916 => 578,  1913 => 577,  1910 => 576,  1907 => 575,  1904 => 574,  1901 => 573,  1898 => 572,  1895 => 571,  1892 => 570,  1889 => 569,  1886 => 568,  1883 => 567,  1881 => 566,  1878 => 565,  1875 => 564,  1872 => 563,  1870 => 562,  1867 => 561,  1859 => 557,  1857 => 553,  1855 => 552,  1852 => 551,  1847 => 547,  1825 => 542,  1822 => 541,  1819 => 540,  1816 => 539,  1813 => 538,  1810 => 537,  1807 => 536,  1804 => 535,  1801 => 534,  1799 => 533,  1796 => 532,  1793 => 531,  1790 => 530,  1787 => 529,  1784 => 528,  1781 => 527,  1779 => 526,  1776 => 525,  1773 => 524,  1770 => 523,  1768 => 522,  1765 => 521,  1762 => 520,  1759 => 519,  1757 => 518,  1754 => 517,  1751 => 516,  1748 => 515,  1745 => 514,  1742 => 513,  1739 => 512,  1736 => 511,  1733 => 510,  1730 => 509,  1728 => 508,  1725 => 507,  1722 => 506,  1720 => 505,  1717 => 504,  1709 => 498,  1706 => 497,  1704 => 496,  1701 => 495,  1693 => 491,  1690 => 490,  1688 => 489,  1685 => 488,  1673 => 484,  1670 => 483,  1667 => 482,  1664 => 481,  1661 => 480,  1658 => 479,  1655 => 478,  1652 => 477,  1649 => 476,  1647 => 475,  1644 => 474,  1636 => 470,  1633 => 469,  1631 => 468,  1628 => 467,  1620 => 463,  1617 => 462,  1615 => 461,  1612 => 460,  1604 => 456,  1601 => 455,  1599 => 454,  1596 => 453,  1587 => 447,  1584 => 446,  1581 => 445,  1579 => 444,  1576 => 443,  1568 => 439,  1565 => 438,  1563 => 437,  1560 => 436,  1552 => 432,  1549 => 431,  1547 => 430,  1544 => 429,  1537 => 424,  1535 => 420,  1532 => 419,  1530 => 418,  1527 => 417,  1519 => 413,  1516 => 412,  1514 => 411,  1511 => 410,  1503 => 406,  1500 => 405,  1498 => 404,  1496 => 403,  1493 => 402,  1486 => 397,  1480 => 396,  1475 => 395,  1471 => 394,  1466 => 393,  1463 => 392,  1460 => 391,  1454 => 389,  1451 => 388,  1449 => 387,  1446 => 386,  1438 => 380,  1436 => 379,  1435 => 378,  1434 => 377,  1433 => 376,  1428 => 375,  1425 => 374,  1419 => 372,  1416 => 371,  1414 => 421,  1411 => 369,  1402 => 417,  1398 => 415,  1394 => 414,  1390 => 360,  1385 => 413,  1382 => 358,  1376 => 356,  1373 => 355,  1371 => 354,  1368 => 353,  1352 => 349,  1350 => 348,  1347 => 398,  1331 => 343,  1329 => 342,  1326 => 341,  1319 => 336,  1314 => 333,  1312 => 332,  1306 => 330,  1300 => 328,  1294 => 325,  1290 => 324,  1274 => 323,  1271 => 375,  1268 => 374,  1265 => 320,  1262 => 319,  1259 => 318,  1256 => 369,  1253 => 316,  1250 => 315,  1247 => 314,  1245 => 313,  1241 => 311,  1233 => 309,  1228 => 357,  1221 => 355,  1218 => 354,  1215 => 304,  1212 => 303,  1210 => 302,  1207 => 301,  1204 => 300,  1201 => 299,  1198 => 346,  1195 => 345,  1192 => 344,  1189 => 295,  1186 => 294,  1183 => 293,  1181 => 292,  1178 => 291,  1176 => 290,  1173 => 289,  1170 => 288,  1168 => 332,  1165 => 286,  1158 => 282,  1155 => 281,  1151 => 279,  1146 => 276,  1144 => 275,  1138 => 273,  1132 => 271,  1126 => 268,  1122 => 267,  1106 => 316,  1103 => 315,  1100 => 314,  1097 => 263,  1094 => 262,  1091 => 261,  1088 => 308,  1085 => 259,  1082 => 258,  1079 => 306,  1077 => 305,  1074 => 304,  1066 => 253,  1061 => 251,  1054 => 250,  1051 => 291,  1048 => 290,  1045 => 247,  1042 => 246,  1040 => 285,  1037 => 244,  1034 => 243,  1031 => 242,  1028 => 241,  1025 => 240,  1022 => 239,  1019 => 238,  1016 => 276,  1013 => 236,  1010 => 235,  1007 => 234,  1004 => 266,  1002 => 232,  999 => 231,  996 => 230,  993 => 229,  991 => 228,  988 => 227,  971 => 223,  959 => 221,  952 => 251,  950 => 250,  945 => 216,  942 => 215,  924 => 214,  922 => 213,  919 => 212,  910 => 207,  907 => 206,  904 => 205,  898 => 203,  896 => 202,  891 => 201,  888 => 200,  885 => 199,  870 => 197,  868 => 196,  861 => 195,  858 => 194,  855 => 193,  853 => 192,  850 => 191,  844 => 204,  838 => 186,  832 => 184,  826 => 182,  823 => 181,  819 => 180,  814 => 191,  812 => 190,  809 => 189,  800 => 172,  794 => 170,  791 => 169,  789 => 168,  786 => 167,  779 => 162,  777 => 161,  764 => 169,  761 => 158,  753 => 164,  751 => 163,  748 => 154,  745 => 153,  742 => 152,  740 => 151,  737 => 150,  734 => 149,  731 => 148,  729 => 155,  726 => 146,  723 => 145,  721 => 153,  718 => 143,  711 => 138,  709 => 137,  702 => 472,  699 => 142,  697 => 141,  694 => 470,  686 => 468,  684 => 129,  681 => 128,  678 => 133,  675 => 132,  672 => 345,  669 => 124,  666 => 126,  664 => 342,  661 => 121,  658 => 124,  656 => 119,  653 => 118,  647 => 336,  637 => 112,  635 => 117,  632 => 110,  624 => 107,  616 => 104,  611 => 103,  609 => 319,  604 => 100,  600 => 99,  596 => 106,  592 => 96,  588 => 308,  582 => 93,  579 => 92,  576 => 101,  574 => 90,  571 => 89,  568 => 88,  565 => 87,  562 => 86,  559 => 296,  556 => 84,  553 => 83,  550 => 94,  547 => 93,  544 => 80,  541 => 290,  539 => 78,  536 => 77,  528 => 73,  525 => 280,  522 => 279,  519 => 278,  517 => 404,  514 => 68,  506 => 63,  501 => 2,  495 => 60,  493 => 78,  488 => 58,  486 => 57,  483 => 258,  476 => 51,  458 => 47,  455 => 46,  452 => 171,  449 => 198,  446 => 197,  443 => 168,  438 => 236,  432 => 38,  419 => 34,  417 => 33,  414 => 52,  411 => 31,  408 => 176,  405 => 49,  399 => 27,  396 => 147,  390 => 43,  376 => 205,  373 => 156,  370 => 133,  356 => 10,  350 => 118,  347 => 322,  345 => 147,  342 => 137,  338 => 135,  335 => 134,  333 => 843,  330 => 106,  328 => 139,  325 => 129,  323 => 128,  320 => 127,  317 => 185,  315 => 125,  310 => 775,  307 => 128,  302 => 281,  300 => 280,  297 => 179,  295 => 178,  292 => 737,  290 => 119,  287 => 696,  282 => 688,  279 => 686,  277 => 683,  274 => 110,  272 => 648,  267 => 101,  262 => 98,  259 => 103,  257 => 79,  249 => 550,  244 => 547,  239 => 504,  236 => 503,  233 => 87,  231 => 83,  228 => 494,  226 => 84,  223 => 487,  218 => 473,  216 => 79,  213 => 78,  198 => 442,  191 => 69,  188 => 102,  181 => 65,  178 => 64,  161 => 63,  148 => 340,  14 => 1,  225 => 298,  211 => 460,  206 => 57,  200 => 72,  192 => 52,  174 => 65,  137 => 33,  190 => 76,  186 => 50,  180 => 48,  172 => 62,  150 => 55,  146 => 181,  118 => 49,  114 => 111,  110 => 38,  104 => 31,  70 => 19,  77 => 25,  23 => 1,  84 => 25,  100 => 36,  65 => 17,  53 => 11,  165 => 60,  160 => 70,  153 => 56,  113 => 40,  134 => 47,  126 => 147,  81 => 24,  76 => 27,  34 => 5,  90 => 27,  58 => 15,  480 => 182,  474 => 50,  469 => 158,  461 => 70,  457 => 245,  453 => 199,  444 => 238,  440 => 41,  437 => 61,  435 => 39,  430 => 37,  427 => 36,  423 => 57,  413 => 134,  409 => 132,  407 => 131,  402 => 215,  398 => 129,  393 => 211,  387 => 164,  384 => 141,  381 => 21,  379 => 20,  374 => 36,  368 => 132,  365 => 197,  362 => 127,  360 => 126,  355 => 143,  341 => 189,  337 => 110,  322 => 101,  314 => 99,  312 => 124,  309 => 129,  305 => 768,  298 => 120,  294 => 90,  285 => 175,  283 => 115,  278 => 106,  268 => 373,  264 => 635,  258 => 94,  252 => 551,  247 => 78,  241 => 90,  229 => 85,  220 => 81,  214 => 60,  177 => 47,  169 => 210,  140 => 58,  132 => 51,  128 => 30,  107 => 37,  61 => 23,  273 => 174,  269 => 107,  254 => 78,  243 => 92,  240 => 71,  238 => 312,  235 => 89,  230 => 303,  227 => 86,  224 => 81,  221 => 62,  219 => 58,  217 => 61,  208 => 76,  204 => 267,  179 => 98,  159 => 90,  143 => 51,  135 => 62,  119 => 40,  102 => 30,  71 => 23,  67 => 16,  63 => 21,  59 => 13,  94 => 21,  89 => 30,  85 => 26,  75 => 22,  68 => 12,  56 => 14,  28 => 3,  38 => 5,  24 => 2,  87 => 26,  26 => 3,  31 => 4,  201 => 106,  196 => 92,  183 => 49,  171 => 45,  166 => 95,  163 => 53,  158 => 80,  156 => 58,  151 => 59,  142 => 35,  138 => 226,  136 => 71,  121 => 50,  117 => 39,  105 => 34,  91 => 29,  62 => 14,  49 => 12,  25 => 35,  21 => 2,  19 => 1,  93 => 28,  88 => 30,  78 => 24,  46 => 14,  44 => 8,  27 => 7,  79 => 29,  72 => 18,  69 => 26,  47 => 9,  40 => 11,  37 => 7,  22 => 2,  246 => 93,  157 => 89,  145 => 74,  139 => 49,  131 => 45,  123 => 42,  120 => 31,  115 => 40,  111 => 47,  108 => 33,  101 => 33,  98 => 29,  96 => 35,  83 => 30,  74 => 22,  66 => 25,  55 => 12,  52 => 12,  50 => 10,  43 => 9,  41 => 7,  35 => 4,  32 => 6,  29 => 3,  209 => 58,  203 => 73,  199 => 93,  193 => 435,  189 => 66,  187 => 75,  182 => 87,  176 => 63,  173 => 85,  168 => 61,  164 => 203,  162 => 59,  154 => 60,  149 => 182,  147 => 54,  144 => 42,  141 => 51,  133 => 32,  130 => 46,  125 => 51,  122 => 41,  116 => 39,  112 => 39,  109 => 27,  106 => 51,  103 => 76,  99 => 31,  95 => 39,  92 => 31,  86 => 181,  82 => 25,  80 => 24,  73 => 23,  64 => 17,  60 => 20,  57 => 19,  54 => 19,  51 => 37,  48 => 10,  45 => 8,  42 => 7,  39 => 10,  36 => 5,  33 => 4,  30 => 3,);
    }
}
