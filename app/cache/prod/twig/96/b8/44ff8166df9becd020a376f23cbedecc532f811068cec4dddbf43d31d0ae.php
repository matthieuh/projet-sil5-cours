<?php

/* BraincraftedBootstrapBundle:Form:bootstrap.html.twig */
class __TwigTemplate_96b844ff8166df9becd020a376f23cbedecc532f811068cec4dddbf43d31d0ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->env->loadTemplate("form_div_layout.html.twig");
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget' => array($this, 'block_form_widget'),
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
                'collection_widget' => array($this, 'block_collection_widget'),
                'bootstrap_collection_widget' => array($this, 'block_bootstrap_collection_widget'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'file_widget' => array($this, 'block_file_widget'),
                'choice_widget' => array($this, 'block_choice_widget'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_options' => array($this, 'block_choice_widget_options'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'number_widget' => array($this, 'block_number_widget'),
                'integer_widget' => array($this, 'block_integer_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'url_widget' => array($this, 'block_url_widget'),
                'search_widget' => array($this, 'block_search_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'password_widget' => array($this, 'block_password_widget'),
                'hidden_widget' => array($this, 'block_hidden_widget'),
                'email_widget' => array($this, 'block_email_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'submit_widget' => array($this, 'block_submit_widget'),
                'reset_widget' => array($this, 'block_reset_widget'),
                'form_label' => array($this, 'block_form_label'),
                'button_label' => array($this, 'block_button_label'),
                'repeated_row' => array($this, 'block_repeated_row'),
                'form_row' => array($this, 'block_form_row'),
                'form_input_group' => array($this, 'block_form_input_group'),
                'form_help' => array($this, 'block_form_help'),
                'button_row' => array($this, 'block_button_row'),
                'hidden_row' => array($this, 'block_hidden_row'),
                'form' => array($this, 'block_form'),
                'form_start' => array($this, 'block_form_start'),
                'form_end' => array($this, 'block_form_end'),
                'form_enctype' => array($this, 'block_form_enctype'),
                'global_form_errors' => array($this, 'block_global_form_errors'),
                'form_errors' => array($this, 'block_form_errors'),
                'form_rest' => array($this, 'block_form_rest'),
                'form_rows' => array($this, 'block_form_rows'),
                'widget_attributes' => array($this, 'block_widget_attributes'),
                'widget_container_attributes' => array($this, 'block_widget_container_attributes'),
                'button_attributes' => array($this, 'block_button_attributes'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget', $context, $blocks);
        // line 14
        echo "
";
        // line 15
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 67
        echo "
";
        // line 68
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 76
        echo "
";
        // line 77
        $this->displayBlock('bootstrap_collection_widget', $context, $blocks);
        // line 117
        echo "
";
        // line 118
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 142
        echo "
";
        // line 143
        $this->displayBlock('file_widget', $context, $blocks);
        // line 166
        echo "
";
        // line 167
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 176
        echo "
";
        // line 177
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 190
        echo "
";
        // line 191
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 211
        echo "
";
        // line 212
        $this->displayBlock('choice_widget_options', $context, $blocks);
        // line 226
        echo "
";
        // line 227
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 285
        echo "
";
        // line 286
        $this->displayBlock('radio_row', $context, $blocks);
        // line 340
        echo "
";
        // line 341
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 346
        echo "
";
        // line 347
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 352
        echo "
";
        // line 353
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 368
        echo "
";
        // line 369
        $this->displayBlock('date_widget', $context, $blocks);
        // line 385
        echo "
";
        // line 386
        $this->displayBlock('time_widget', $context, $blocks);
        // line 401
        echo "
";
        // line 402
        $this->displayBlock('number_widget', $context, $blocks);
        // line 409
        echo "
";
        // line 410
        $this->displayBlock('integer_widget', $context, $blocks);
        // line 416
        echo "
";
        // line 417
        $this->displayBlock('money_widget', $context, $blocks);
        // line 428
        echo "
";
        // line 429
        $this->displayBlock('url_widget', $context, $blocks);
        // line 435
        echo "
";
        // line 436
        $this->displayBlock('search_widget', $context, $blocks);
        // line 442
        echo "
";
        // line 443
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 452
        echo "
";
        // line 453
        $this->displayBlock('password_widget', $context, $blocks);
        // line 459
        echo "
";
        // line 460
        $this->displayBlock('hidden_widget', $context, $blocks);
        // line 466
        echo "
";
        // line 467
        $this->displayBlock('email_widget', $context, $blocks);
        // line 473
        echo "
";
        // line 474
        $this->displayBlock('button_widget', $context, $blocks);
        // line 487
        echo "
";
        // line 488
        $this->displayBlock('submit_widget', $context, $blocks);
        // line 494
        echo "
";
        // line 495
        $this->displayBlock('reset_widget', $context, $blocks);
        // line 501
        echo "
";
        // line 503
        echo "
";
        // line 504
        $this->displayBlock('form_label', $context, $blocks);
        // line 546
        echo "
";
        // line 547
        $this->displayBlock('button_label', $context, $blocks);
        // line 548
        echo "
";
        // line 550
        echo "
";
        // line 551
        $this->displayBlock('repeated_row', $context, $blocks);
        // line 560
        echo "
";
        // line 561
        $this->displayBlock('form_row', $context, $blocks);
        // line 606
        echo "
";
        // line 607
        $this->displayBlock('form_input_group', $context, $blocks);
        // line 635
        echo "
";
        // line 636
        $this->displayBlock('form_help', $context, $blocks);
        // line 647
        echo "
";
        // line 648
        $this->displayBlock('button_row', $context, $blocks);
        // line 682
        echo "
";
        // line 683
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 686
        echo "
";
        // line 688
        echo "
";
        // line 689
        $this->displayBlock('form', $context, $blocks);
        // line 696
        echo "
";
        // line 697
        $this->displayBlock('form_start', $context, $blocks);
        // line 737
        echo "
";
        // line 738
        $this->displayBlock('form_end', $context, $blocks);
        // line 761
        echo "
";
        // line 762
        $this->displayBlock('form_enctype', $context, $blocks);
        // line 767
        echo "
";
        // line 768
        $this->displayBlock('global_form_errors', $context, $blocks);
        // line 774
        echo "
";
        // line 775
        $this->displayBlock('form_errors', $context, $blocks);
        // line 799
        echo "
";
        // line 800
        $this->displayBlock('form_rest', $context, $blocks);
        // line 809
        echo "
";
        // line 811
        echo "
";
        // line 812
        $this->displayBlock('form_rows', $context, $blocks);
        // line 835
        echo "
";
        // line 836
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 842
        echo "
";
        // line 843
        $this->displayBlock('widget_container_attributes', $context, $blocks);
        // line 853
        echo "
";
        // line 854
        $this->displayBlock('button_attributes', $context, $blocks);
    }

    // line 5
    public function block_form_widget($context, array $blocks = array())
    {
        // line 6
        ob_start();
        // line 7
        echo "    ";
        if ((isset($context["compound"]) ? $context["compound"] : null)) {
            // line 8
            echo "        ";
            $this->displayBlock("form_widget_compound", $context, $blocks);
            echo "
    ";
        } else {
            // line 10
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 15
    public function block_form_widget_simple($context, array $blocks = array())
    {
        // line 16
        ob_start();
        // line 17
        echo "    ";
        $context["style"] = ((array_key_exists("style", $context)) ? (_twig_default_filter((isset($context["style"]) ? $context["style"] : null), $this->env->getExtension('braincrafted_bootstrap_form')->getStyle())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getStyle()));
        // line 18
        echo "    ";
        $context["col_size"] = ((array_key_exists("col_size", $context)) ? (_twig_default_filter((isset($context["col_size"]) ? $context["col_size"] : null), $this->env->getExtension('braincrafted_bootstrap_form')->getColSize())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getColSize()));
        // line 19
        echo "
    ";
        // line 20
        if (((!array_key_exists("simple_col", $context)) && $this->env->getExtension('braincrafted_bootstrap_form')->getSimpleCol())) {
            // line 21
            echo "        ";
            $context["simple_col"] = $this->env->getExtension('braincrafted_bootstrap_form')->getSimpleCol();
            // line 22
            echo "    ";
        }
        // line 23
        echo "    ";
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "simple_col", array(), "any", true, true) && (!twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "simple_col"))))) {
            // line 24
            echo "        ";
            $context["simple_col"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "simple_col");
            // line 25
            echo "    ";
        }
        // line 26
        echo "    ";
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "col_size", array(), "any", true, true) && (!twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "col_size"))))) {
            // line 27
            echo "        ";
            $context["col_size"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "col_size");
            // line 28
            echo "    ";
        }
        // line 29
        echo "    ";
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "style", array(), "any", true, true) && (!twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "style"))))) {
            // line 30
            echo "        ";
            $context["style"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "style");
            // line 31
            echo "    ";
        }
        // line 32
        echo "
    ";
        // line 33
        if ((array_key_exists("simple_col", $context) && (isset($context["simple_col"]) ? $context["simple_col"] : null))) {
            // line 34
            echo "        <div class=\"col-";
            echo twig_escape_filter($this->env, (isset($context["col_size"]) ? $context["col_size"] : null), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, (isset($context["simple_col"]) ? $context["simple_col"] : null), "html", null, true);
            echo "\">
    ";
        }
        // line 36
        echo "
    ";
        // line 37
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "text")) : ("text"));
        // line 38
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class"), "")) : ("")) . " form-control"))));
        // line 39
        echo "
    ";
        // line 40
        if ((((isset($context["style"]) ? $context["style"] : null) == "inline") && ((!$this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "placeholder", array(), "any", true, true)) || twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "placeholder"))))) {
            // line 41
            echo "        ";
            if (twig_test_empty((isset($context["label"]) ? $context["label"] : null))) {
                // line 42
                echo "            ";
                $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("placeholder" => call_user_func_array($this->env->getFilter('humanize')->getCallable(), array((isset($context["name"]) ? $context["name"] : null)))));
                // line 43
                echo "        ";
            } else {
                // line 44
                echo "            ";
                $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("placeholder" => (isset($context["label"]) ? $context["label"] : null)));
                // line 45
                echo "        ";
            }
            // line 46
            echo "    ";
        }
        // line 47
        echo "
    <input type=\"";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ((!twig_test_empty((isset($context["value"]) ? $context["value"] : null)))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\" ";
        }
        echo ">

    ";
        // line 50
        if (array_key_exists("simple_col", $context)) {
            // line 51
            echo "        </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 56
    public function block_form_widget_compound($context, array $blocks = array())
    {
        // line 57
        ob_start();
        // line 58
        echo "    <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        ";
        // line 59
        if (twig_test_empty($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent"))) {
            // line 60
            echo "            ";
            $this->displayBlock("global_form_errors", $context, $blocks);
            echo "
        ";
        }
        // line 62
        echo "        ";
        $this->displayBlock("form_rows", $context, $blocks);
        echo "
        ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 68
    public function block_collection_widget($context, array $blocks = array())
    {
        // line 69
        ob_start();
        // line 70
        echo "    ";
        if (array_key_exists("prototype", $context)) {
            // line 71
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("data-prototype" => $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["prototype"]) ? $context["prototype"] : null), 'row')));
            // line 72
            echo "    ";
        }
        // line 73
        echo "    ";
        $this->displayBlock("form_widget", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 77
    public function block_bootstrap_collection_widget($context, array $blocks = array())
    {
        // line 78
        ob_start();
        // line 79
        echo "    ";
        if (array_key_exists("prototype", $context)) {
            // line 80
            echo "        ";
            $context["prototype_vars"] = array();
            // line 81
            echo "        ";
            if (array_key_exists("style", $context)) {
                // line 82
                echo "            ";
                $context["prototype_vars"] = twig_array_merge((isset($context["prototype_vars"]) ? $context["prototype_vars"] : null), array("style" => (isset($context["style"]) ? $context["style"] : null)));
                // line 83
                echo "        ";
            }
            // line 84
            echo "        ";
            $context["prototype_html"] = (((("<div class=\"col-xs-" . $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars"), "sub_widget_col")) . "\">") . $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["prototype"]) ? $context["prototype"] : null), 'widget', (isset($context["prototype_vars"]) ? $context["prototype_vars"] : null))) . "</div>");
            // line 85
            echo "        ";
            if ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars"), "allow_delete")) {
                // line 86
                echo "            ";
                $context["prototype_html"] = ((((((isset($context["prototype_html"]) ? $context["prototype_html"] : null) . "<div class=\"col-xs-") . $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars"), "button_col")) . "\"><a href=\"#\" class=\"btn btn-danger btn-small\" data-removefield=\"collection\" data-field=\"__id__\">") . $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars"), "delete_button_text"), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null))) . "</a></div>");
                // line 87
                echo "        ";
            }
            // line 88
            echo "        ";
            $context["prototype_html"] = (("<div class=\"row\">" . (isset($context["prototype_html"]) ? $context["prototype_html"] : null)) . "</div>");
            // line 89
            echo "
        ";
            // line 90
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("data-prototype" => (isset($context["prototype_html"]) ? $context["prototype_html"] : null)));
            // line 91
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("data-prototype-name" => (isset($context["prototype_name"]) ? $context["prototype_name"] : null)));
            // line 92
            echo "    ";
        }
        // line 93
        echo "    <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        <ul class=\"bc-collection list-unstyled\">
            ";
        // line 95
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 96
            echo "                <li>
                    <div class=\"row\">
                        <div class=\"col-xs-";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars"), "sub_widget_col"), "html", null, true);
            echo "\">
                            ";
            // line 99
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field"]) ? $context["field"] : null), 'widget');
            echo "
                            ";
            // line 100
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field"]) ? $context["field"] : null), 'errors');
            echo "
                        </div>
                        ";
            // line 102
            if ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars"), "allow_delete")) {
                // line 103
                echo "                            <div class=\"col-xs-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars"), "button_col"), "html", null, true);
                echo "\">
                                <a href=\"#\" class=\"btn btn-danger btn-small\" data-removefield=\"collection\" data-field=\"";
                // line 104
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "vars"), "id"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars"), "delete_button_text"), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
                echo "</a>
                            </div>
                        ";
            }
            // line 107
            echo "                    </div>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "        </ul>
        ";
        // line 111
        if ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars"), "allow_add")) {
            // line 112
            echo "            <a href=\"#\" class=\"btn btn-primary btn-small\" data-addfield=\"collection\" data-collection=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars"), "id"), "html", null, true);
            echo "\" data-prototype-name=\"";
            echo twig_escape_filter($this->env, (isset($context["prototype_name"]) ? $context["prototype_name"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars"), "add_button_text"), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
            echo "</a>
        ";
        }
        // line 114
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 118
    public function block_textarea_widget($context, array $blocks = array())
    {
        // line 119
        ob_start();
        // line 120
        echo "    ";
        $context["col_size"] = ((array_key_exists("col_size", $context)) ? (_twig_default_filter((isset($context["col_size"]) ? $context["col_size"] : null), $this->env->getExtension('braincrafted_bootstrap_form')->getColSize())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getColSize()));
        // line 121
        echo "
    ";
        // line 122
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "simple_col", array(), "any", true, true) && (!twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "simple_col"))))) {
            // line 123
            echo "        ";
            $context["simple_col"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "simple_col");
            // line 124
            echo "    ";
        }
        // line 125
        echo "    ";
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "col_size", array(), "any", true, true) && (!twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "col_size"))))) {
            // line 126
            echo "        ";
            $context["col_size"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "col_size");
            // line 127
            echo "    ";
        }
        // line 128
        echo "
    ";
        // line 129
        if (array_key_exists("simple_col", $context)) {
            // line 130
            echo "        <div class=\"col-";
            echo twig_escape_filter($this->env, (isset($context["col_size"]) ? $context["col_size"] : null), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, (isset($context["simple_col"]) ? $context["simple_col"] : null), "html", null, true);
            echo "\">
    ";
        }
        // line 132
        echo "
    ";
        // line 133
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class"), "")) : ("")) . " form-control"))));
        // line 134
        echo "
    <textarea ";
        // line 135
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
        echo "</textarea>

    ";
        // line 137
        if (array_key_exists("simple_col", $context)) {
            // line 138
            echo "        </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 143
    public function block_file_widget($context, array $blocks = array())
    {
        // line 144
        ob_start();
        // line 145
        echo "    ";
        $context["col_size"] = ((array_key_exists("col_size", $context)) ? (_twig_default_filter((isset($context["col_size"]) ? $context["col_size"] : null), $this->env->getExtension('braincrafted_bootstrap_form')->getColSize())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getColSize()));
        // line 146
        echo "
    ";
        // line 147
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "simple_col", array(), "any", true, true) && (!twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "simple_col"))))) {
            // line 148
            echo "        ";
            $context["simple_col"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "simple_col");
            // line 149
            echo "    ";
        }
        // line 150
        echo "
    ";
        // line 151
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "col_size", array(), "any", true, true) && (!twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "col_size"))))) {
            // line 152
            echo "        ";
            $context["col_size"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "col_size");
            // line 153
            echo "    ";
        }
        // line 154
        echo "
    ";
        // line 155
        if (array_key_exists("simple_col", $context)) {
            // line 156
            echo "        <div class=\"col-";
            echo twig_escape_filter($this->env, (isset($context["col_size"]) ? $context["col_size"] : null), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, (isset($context["simple_col"]) ? $context["simple_col"] : null), "html", null, true);
            echo "\">
    ";
        }
        // line 158
        echo "
    <input type=\"";
        // line 159
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ((!twig_test_empty((isset($context["value"]) ? $context["value"] : null)))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\" ";
        }
        echo ">

    ";
        // line 161
        if (array_key_exists("simple_col", $context)) {
            // line 162
            echo "        </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 167
    public function block_choice_widget($context, array $blocks = array())
    {
        // line 168
        ob_start();
        // line 169
        echo "    ";
        if ((isset($context["expanded"]) ? $context["expanded"] : null)) {
            // line 170
            echo "        ";
            $this->displayBlock("choice_widget_expanded", $context, $blocks);
            echo "
    ";
        } else {
            // line 172
            echo "        ";
            $this->displayBlock("choice_widget_collapsed", $context, $blocks);
            echo "
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 177
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        // line 178
        ob_start();
        // line 179
        echo "    <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
    ";
        // line 180
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 181
            echo "        ";
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "multiple", array(), "any", true, true)) {
                // line 182
                echo "            ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : null), 'row', array("no_form_group" => true));
                echo "
        ";
            } else {
                // line 184
                echo "            ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : null), 'row', array("no_form_group" => true));
                echo "
        ";
            }
            // line 186
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 187
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 191
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        // line 192
        ob_start();
        // line 193
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class"), "")) : ("")) . " form-control"))));
        // line 194
        echo "
    <select ";
        // line 195
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["multiple"]) ? $context["multiple"] : null)) {
            echo " multiple=\"multiple\"";
        }
        echo ">
        ";
        // line 196
        if ((!(null === (isset($context["empty_value"]) ? $context["empty_value"] : null)))) {
            // line 197
            echo "            <option ";
            if ((isset($context["required"]) ? $context["required"] : null)) {
                echo " disabled=\"disabled\"";
                if (twig_test_empty((isset($context["value"]) ? $context["value"] : null))) {
                    echo " selected=\"selected\"";
                }
            } else {
                echo " value=\"\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["empty_value"]) ? $context["empty_value"] : null), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
            echo "</option>
        ";
        }
        // line 199
        echo "        ";
        if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) ? $context["preferred_choices"] : null)) > 0)) {
            // line 200
            echo "            ";
            $context["options"] = (isset($context["preferred_choices"]) ? $context["preferred_choices"] : null);
            // line 201
            echo "            ";
            $this->displayBlock("choice_widget_options", $context, $blocks);
            echo "
            ";
            // line 202
            if (((twig_length_filter($this->env, (isset($context["choices"]) ? $context["choices"] : null)) > 0) && (!(null === (isset($context["separator"]) ? $context["separator"] : null))))) {
                // line 203
                echo "                <option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, (isset($context["separator"]) ? $context["separator"] : null), "html", null, true);
                echo "</option>
            ";
            }
            // line 205
            echo "        ";
        }
        // line 206
        echo "        ";
        $context["options"] = (isset($context["choices"]) ? $context["choices"] : null);
        // line 207
        echo "        ";
        $this->displayBlock("choice_widget_options", $context, $blocks);
        echo "
    </select>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 212
    public function block_choice_widget_options($context, array $blocks = array())
    {
        // line 213
        ob_start();
        // line 214
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["group_label"] => $context["choice"]) {
            // line 215
            echo "        ";
            if (twig_test_iterable((isset($context["choice"]) ? $context["choice"] : null))) {
                // line 216
                echo "            <optgroup label=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["group_label"]) ? $context["group_label"] : null), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
                echo "\">
                ";
                // line 217
                $context["options"] = (isset($context["choice"]) ? $context["choice"] : null);
                // line 218
                echo "                ";
                $this->displayBlock("choice_widget_options", $context, $blocks);
                echo "
            </optgroup>
        ";
            } else {
                // line 221
                echo "            <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["choice"]) ? $context["choice"] : null), "value"), "html", null, true);
                echo "\"";
                if ($this->env->getExtension('form')->isSelectedChoice((isset($context["choice"]) ? $context["choice"] : null), (isset($context["value"]) ? $context["value"] : null))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["choice"]) ? $context["choice"] : null), "label"), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
                echo "</option>
        ";
            }
            // line 223
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group_label'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 227
    public function block_checkbox_row($context, array $blocks = array())
    {
        // line 228
        ob_start();
        // line 229
        echo "    ";
        $context["style"] = ((array_key_exists("style", $context)) ? (_twig_default_filter((isset($context["style"]) ? $context["style"] : null), $this->env->getExtension('braincrafted_bootstrap_form')->getStyle())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getStyle()));
        // line 230
        echo "    ";
        $context["col_size"] = ((array_key_exists("col_size", $context)) ? (_twig_default_filter((isset($context["col_size"]) ? $context["col_size"] : null), $this->env->getExtension('braincrafted_bootstrap_form')->getColSize())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getColSize()));
        // line 231
        echo "
    ";
        // line 232
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "label_col", array(), "any", true, true) && (!twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "label_col"))))) {
            // line 233
            echo "        ";
            $context["label_col"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "label_col");
            // line 234
            echo "    ";
        }
        // line 235
        echo "    ";
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_col", array(), "any", true, true) && (!twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_col"))))) {
            // line 236
            echo "        ";
            $context["widget_col"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_col");
            // line 237
            echo "    ";
        }
        // line 238
        echo "    ";
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "col_size", array(), "any", true, true) && (!twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "col_size"))))) {
            // line 239
            echo "        ";
            $context["col_size"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "col_size");
            // line 240
            echo "    ";
        }
        // line 241
        echo "    ";
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "style", array(), "any", true, true) && (!twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "style"))))) {
            // line 242
            echo "        ";
            $context["style"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "style");
            // line 243
            echo "    ";
        }
        // line 244
        echo "
    ";
        // line 245
        $context["class"] = "";
        // line 246
        echo "    ";
        if ((array_key_exists("align_with_widget", $context) || $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "align_with_widget", array(), "any", true, true))) {
            // line 247
            echo "        ";
            $context["widget_col"] = ((array_key_exists("widget_col", $context)) ? (_twig_default_filter((isset($context["widget_col"]) ? $context["widget_col"] : null), $this->env->getExtension('braincrafted_bootstrap_form')->getWidgetCol())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getWidgetCol()));
            // line 248
            echo "        ";
            $context["label_col"] = ((array_key_exists("label_col", $context)) ? (_twig_default_filter((isset($context["label_col"]) ? $context["label_col"] : null), $this->env->getExtension('braincrafted_bootstrap_form')->getLabelCol())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getLabelCol()));
            // line 249
            echo "        ";
            $context["class"] = ((((((("col-" . (isset($context["col_size"]) ? $context["col_size"] : null)) . "-") . (isset($context["widget_col"]) ? $context["widget_col"] : null)) . " col-") . (isset($context["col_size"]) ? $context["col_size"] : null)) . "-offset-") . (isset($context["label_col"]) ? $context["label_col"] : null));
            // line 250
            echo "        <div class=\"form-group row";
            if ((!$this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars"), "valid"))) {
                echo " has-error";
            }
            echo "\">
            <div class=\"";
            // line 251
            echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
            echo "\">
    ";
        } elseif (((!array_key_exists("no_form_group", $context)) || ((isset($context["no_form_group"]) ? $context["no_form_group"] : null) == false))) {
            // line 253
            echo "        <div class=\"form-group";
            if ((!$this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars"), "valid"))) {
                echo " has-error";
            }
            echo "\">
    ";
        }
        // line 255
        echo "        <div class=\"checkbox\">
            ";
        // line 256
        if ((!((isset($context["label"]) ? $context["label"] : null) === false))) {
            // line 257
            echo "                ";
            if ((!(isset($context["compound"]) ? $context["compound"] : null))) {
                // line 258
                echo "                    ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), array("for" => (isset($context["id"]) ? $context["id"] : null)));
                // line 259
                echo "                ";
            }
            // line 260
            echo "                ";
            if ((isset($context["required"]) ? $context["required"] : null)) {
                // line 261
                echo "                    ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class"), "")) : ("")) . " required"))));
                // line 262
                echo "                ";
            }
            // line 263
            echo "                ";
            if (twig_test_empty((isset($context["label"]) ? $context["label"] : null))) {
                // line 264
                echo "                    ";
                $context["label"] = call_user_func_array($this->env->getFilter('humanize')->getCallable(), array((isset($context["name"]) ? $context["name"] : null)));
                // line 265
                echo "                ";
            }
            // line 266
            echo "                <label";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : null));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["attrname"]) ? $context["attrname"] : null), "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, (isset($context["attrvalue"]) ? $context["attrvalue"] : null), "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
                    ";
            // line 267
            $this->displayBlock("checkbox_widget", $context, $blocks);
            echo "
                    ";
            // line 268
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : null), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
            echo "
                </label>
            ";
        } else {
            // line 271
            echo "                ";
            $this->displayBlock("checkbox_widget", $context, $blocks);
            echo "
            ";
        }
        // line 273
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
        </div>
    ";
        // line 275
        if ((array_key_exists("align_with_widget", $context) || $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "align_with_widget", array(), "any", true, true))) {
            // line 276
            echo "        </div>
        </div>
    ";
        } elseif (((!array_key_exists("no_form_group", $context)) || ((isset($context["no_form_group"]) ? $context["no_form_group"] : null) == false))) {
            // line 279
            echo "        </div>
    ";
        }
        // line 281
        echo "
    ";
        // line 282
        if (((isset($context["style"]) ? $context["style"] : null) == "inline")) {
            echo "&nbsp;";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 286
    public function block_radio_row($context, array $blocks = array())
    {
        // line 287
        ob_start();
        // line 288
        echo "    ";
        $context["class"] = "";
        // line 289
        echo "
    ";
        // line 290
        $context["col_size"] = ((array_key_exists("col_size", $context)) ? (_twig_default_filter((isset($context["col_size"]) ? $context["col_size"] : null), $this->env->getExtension('braincrafted_bootstrap_form')->getColSize())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getColSize()));
        // line 291
        echo "
    ";
        // line 292
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "label_col", array(), "any", true, true) && (!twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "label_col"))))) {
            // line 293
            echo "        ";
            $context["label_col"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "label_col");
            // line 294
            echo "    ";
        }
        // line 295
        echo "    ";
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_col", array(), "any", true, true) && (!twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_col"))))) {
            // line 296
            echo "        ";
            $context["widget_col"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_col");
            // line 297
            echo "    ";
        }
        // line 298
        echo "    ";
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "col_size", array(), "any", true, true) && (!twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "col_size"))))) {
            // line 299
            echo "        ";
            $context["col_size"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "col_size");
            // line 300
            echo "    ";
        }
        // line 301
        echo "
    ";
        // line 302
        if ((array_key_exists("align_with_widget", $context) || $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "align_with_widget", array(), "any", true, true))) {
            // line 303
            echo "        ";
            $context["widget_col"] = ((array_key_exists("widget_col", $context)) ? (_twig_default_filter((isset($context["widget_col"]) ? $context["widget_col"] : null), $this->env->getExtension('braincrafted_bootstrap_form')->getWidgetCol())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getWidgetCol()));
            // line 304
            echo "        ";
            $context["label_col"] = ((array_key_exists("label_col", $context)) ? (_twig_default_filter((isset($context["label_col"]) ? $context["label_col"] : null), $this->env->getExtension('braincrafted_bootstrap_form')->getLabelCol())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getLabelCol()));
            // line 305
            echo "        ";
            $context["class"] = (((((((" col-" . (isset($context["col_size"]) ? $context["col_size"] : null)) . "-") . (isset($context["widget_col"]) ? $context["widget_col"] : null)) . " col-") . (isset($context["col_size"]) ? $context["col_size"] : null)) . "-offset-") . (isset($context["label_col"]) ? $context["label_col"] : null));
            // line 306
            echo "        <div class=\"form-group row";
            if ((!$this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars"), "valid"))) {
                echo " has-error";
            }
            echo "\">
            <div class=\"";
            // line 307
            echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
            echo "\">
    ";
        } elseif (((!array_key_exists("no_form_group", $context)) || ((isset($context["no_form_group"]) ? $context["no_form_group"] : null) == false))) {
            // line 309
            echo "        <div class=\"form-group";
            if ((!$this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars"), "valid"))) {
                echo " has-error";
            }
            echo "\">
    ";
        }
        // line 311
        echo "
        <div class=\"radio\">
            ";
        // line 313
        if ((!((isset($context["label"]) ? $context["label"] : null) === false))) {
            // line 314
            echo "                ";
            if ((!(isset($context["compound"]) ? $context["compound"] : null))) {
                // line 315
                echo "                    ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), array("for" => (isset($context["id"]) ? $context["id"] : null)));
                // line 316
                echo "                ";
            }
            // line 317
            echo "                ";
            if ((isset($context["required"]) ? $context["required"] : null)) {
                // line 318
                echo "                    ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class"), "")) : ("")) . " required"))));
                // line 319
                echo "                ";
            }
            // line 320
            echo "                ";
            if (twig_test_empty((isset($context["label"]) ? $context["label"] : null))) {
                // line 321
                echo "                    ";
                $context["label"] = call_user_func_array($this->env->getFilter('humanize')->getCallable(), array((isset($context["name"]) ? $context["name"] : null)));
                // line 322
                echo "                ";
            }
            // line 323
            echo "                <label";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : null));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["attrname"]) ? $context["attrname"] : null), "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, (isset($context["attrvalue"]) ? $context["attrvalue"] : null), "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
                    ";
            // line 324
            $this->displayBlock("radio_widget", $context, $blocks);
            echo "
                    ";
            // line 325
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : null), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
            echo "
                </label>
            ";
        } else {
            // line 328
            echo "                ";
            $this->displayBlock("radio_widget", $context, $blocks);
            echo "
            ";
        }
        // line 330
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
        </div>
    ";
        // line 332
        if ((array_key_exists("align_with_widget", $context) || $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "align_with_widget", array(), "any", true, true))) {
            // line 333
            echo "        </div>
        </div>
    ";
        } elseif (((!array_key_exists("no_form_group", $context)) || ((isset($context["no_form_group"]) ? $context["no_form_group"] : null) == false))) {
            // line 336
            echo "        </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 341
    public function block_checkbox_widget($context, array $blocks = array())
    {
        // line 342
        ob_start();
        // line 343
        echo "    <input type=\"checkbox\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " />
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 347
    public function block_radio_widget($context, array $blocks = array())
    {
        // line 348
        ob_start();
        // line 349
        echo "    <input type=\"radio\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " />
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 353
    public function block_datetime_widget($context, array $blocks = array())
    {
        // line 354
        ob_start();
        // line 355
        echo "    ";
        if (((isset($context["widget"]) ? $context["widget"] : null) == "single_text")) {
            // line 356
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        } else {
            // line 358
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => "bootstrap-datetime"));
            // line 359
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 360
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "date"), 'widget');
            echo "
            ";
            // line 361
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "time"), 'widget');
            echo "
            ";
            // line 362
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "date"), 'errors');
            echo "
            ";
            // line 363
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "time"), 'errors');
            echo "
        </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 369
    public function block_date_widget($context, array $blocks = array())
    {
        // line 370
        ob_start();
        // line 371
        echo "    ";
        if (((isset($context["widget"]) ? $context["widget"] : null) == "single_text")) {
            // line 372
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        } else {
            // line 374
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => "bootstrap-date"));
            // line 375
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 376
            echo strtr((isset($context["date_pattern"]) ? $context["date_pattern"] : null), array("{{ year }}" =>             // line 377
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "year"), 'widget'), "{{ month }}" =>             // line 378
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "month"), 'widget'), "{{ day }}" =>             // line 379
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "day"), 'widget')));
            // line 380
            echo "
        </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 386
    public function block_time_widget($context, array $blocks = array())
    {
        // line 387
        ob_start();
        // line 388
        echo "    ";
        if (((isset($context["widget"]) ? $context["widget"] : null) == "single_text")) {
            // line 389
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        } else {
            // line 391
            echo "        ";
            $context["vars"] = ((((isset($context["widget"]) ? $context["widget"] : null) == "text")) ? (array("attr" => array("size" => 1))) : (array()));
            // line 392
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => "bootstrap-time"));
            // line 393
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 394
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "hour"), 'widget', (isset($context["vars"]) ? $context["vars"] : null));
            echo "
            ";
            // line 395
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : null)) {
                echo ":";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "minute"), 'widget', (isset($context["vars"]) ? $context["vars"] : null));
            }
            // line 396
            echo "            ";
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : null)) {
                echo ":";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "second"), 'widget', (isset($context["vars"]) ? $context["vars"] : null));
            }
            // line 397
            echo "        </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 402
    public function block_number_widget($context, array $blocks = array())
    {
        // line 403
        ob_start();
        // line 404
        echo "    ";
        // line 405
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "text")) : ("text"));
        // line 406
        echo "    ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 410
    public function block_integer_widget($context, array $blocks = array())
    {
        // line 411
        ob_start();
        // line 412
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "number")) : ("number"));
        // line 413
        echo "    ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 417
    public function block_money_widget($context, array $blocks = array())
    {
        // line 418
        ob_start();
        // line 419
        echo "    <div class=\"input-group\">
        ";
        // line 420
        echo strtr((isset($context["money_pattern"]) ? $context["money_pattern"] : null), array("{{ widget }}" => $this->renderBlock("form_widget_simple", $context, $blocks), "{{ tag_start }}" => "<span class=\"input-group-addon\">", "{{ tag_end }}" => "</span>"));
        // line 424
        echo "
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 429
    public function block_url_widget($context, array $blocks = array())
    {
        // line 430
        ob_start();
        // line 431
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "url")) : ("url"));
        // line 432
        echo "    ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 436
    public function block_search_widget($context, array $blocks = array())
    {
        // line 437
        ob_start();
        // line 438
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "search")) : ("search"));
        // line 439
        echo "    ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 443
    public function block_percent_widget($context, array $blocks = array())
    {
        // line 444
        ob_start();
        // line 445
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "text")) : ("text"));
        // line 446
        echo "    <div class=\"input-group\">
        ";
        // line 447
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
        <span class=\"input-group-addon\">%</span>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 453
    public function block_password_widget($context, array $blocks = array())
    {
        // line 454
        ob_start();
        // line 455
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "password")) : ("password"));
        // line 456
        echo "    ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 460
    public function block_hidden_widget($context, array $blocks = array())
    {
        // line 461
        ob_start();
        // line 462
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "hidden")) : ("hidden"));
        // line 463
        echo "    ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 467
    public function block_email_widget($context, array $blocks = array())
    {
        // line 468
        ob_start();
        // line 469
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "email")) : ("email"));
        // line 470
        echo "    ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 474
    public function block_button_widget($context, array $blocks = array())
    {
        // line 475
        ob_start();
        // line 476
        echo "    ";
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : null))) {
            // line 477
            echo "        ";
            $context["label"] = call_user_func_array($this->env->getFilter('humanize')->getCallable(), array((isset($context["name"]) ? $context["name"] : null)));
            // line 478
            echo "    ";
        }
        // line 479
        echo "    ";
        if ((array_key_exists("type", $context) && ((isset($context["type"]) ? $context["type"] : null) == "submit"))) {
            // line 480
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class"), "")) : ("")) . " btn btn-primary"))));
            // line 481
            echo "    ";
        } else {
            // line 482
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class"), "")) : ("")) . " btn btn-default"))));
            // line 483
            echo "    ";
        }
        // line 484
        echo "    <button type=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "button")) : ("button")), "html", null, true);
        echo "\" ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : null), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
        echo "</button>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 488
    public function block_submit_widget($context, array $blocks = array())
    {
        // line 489
        ob_start();
        // line 490
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "submit")) : ("submit"));
        // line 491
        echo "    ";
        $this->displayBlock("button_widget", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 495
    public function block_reset_widget($context, array $blocks = array())
    {
        // line 496
        ob_start();
        // line 497
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "reset")) : ("reset"));
        // line 498
        echo "    ";
        $this->displayBlock("button_widget", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 504
    public function block_form_label($context, array $blocks = array())
    {
        // line 505
        ob_start();
        // line 506
        echo "    ";
        $context["col_size"] = ((array_key_exists("col_size", $context)) ? (_twig_default_filter((isset($context["col_size"]) ? $context["col_size"] : null), $this->env->getExtension('braincrafted_bootstrap_form')->getColSize())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getColSize()));
        // line 507
        echo "
    ";
        // line 508
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "label_col", array(), "any", true, true) && (!twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "label_col"))))) {
            // line 509
            echo "        ";
            $context["label_col"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "label_col");
            // line 510
            echo "    ";
        }
        // line 511
        echo "    ";
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_col", array(), "any", true, true) && (!twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_col"))))) {
            // line 512
            echo "        ";
            $context["widget_col"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_col");
            // line 513
            echo "    ";
        }
        // line 514
        echo "    ";
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "col_size", array(), "any", true, true) && (!twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "col_size"))))) {
            // line 515
            echo "        ";
            $context["col_size"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "col_size");
            // line 516
            echo "    ";
        }
        // line 517
        echo "
    ";
        // line 518
        if ((!((isset($context["label"]) ? $context["label"] : null) === false))) {
            // line 519
            echo "        ";
            $context["style"] = ((array_key_exists("style", $context)) ? (_twig_default_filter((isset($context["style"]) ? $context["style"] : null), $this->env->getExtension('braincrafted_bootstrap_form')->getStyle())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getStyle()));
            // line 520
            echo "        ";
            $context["label_col"] = ((array_key_exists("label_col", $context)) ? (_twig_default_filter((isset($context["label_col"]) ? $context["label_col"] : null), $this->env->getExtension('braincrafted_bootstrap_form')->getLabelCol())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getLabelCol()));
            // line 521
            echo "
        ";
            // line 522
            if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "style", array(), "any", true, true) && (!twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "style"))))) {
                // line 523
                echo "            ";
                $context["style"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "style");
                // line 524
                echo "        ";
            }
            // line 525
            echo "
        ";
            // line 526
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class"), "")) : ("")) . " control-label"))));
            // line 527
            echo "        ";
            if (((isset($context["style"]) ? $context["style"] : null) == "horizontal")) {
                // line 528
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), array("class" => trim((((((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class"), "")) : ("")) . " col-") . (isset($context["col_size"]) ? $context["col_size"] : null)) . "-") . (isset($context["label_col"]) ? $context["label_col"] : null)))));
                // line 529
                echo "        ";
            } elseif (((isset($context["style"]) ? $context["style"] : null) == "inline")) {
                // line 530
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class"), "")) : ("")) . " sr-only"))));
                // line 531
                echo "        ";
            }
            // line 532
            echo "
        ";
            // line 533
            if ((!(isset($context["compound"]) ? $context["compound"] : null))) {
                // line 534
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), array("for" => (isset($context["id"]) ? $context["id"] : null)));
                // line 535
                echo "        ";
            }
            // line 536
            echo "        ";
            if ((isset($context["required"]) ? $context["required"] : null)) {
                // line 537
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class"), "")) : ("")) . " required"))));
                // line 538
                echo "        ";
            }
            // line 539
            echo "        ";
            if (twig_test_empty((isset($context["label"]) ? $context["label"] : null))) {
                // line 540
                echo "            ";
                $context["label"] = call_user_func_array($this->env->getFilter('humanize')->getCallable(), array((isset($context["name"]) ? $context["name"] : null)));
                // line 541
                echo "        ";
            }
            // line 542
            echo "        <label";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : null));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["attrname"]) ? $context["attrname"] : null), "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, (isset($context["attrvalue"]) ? $context["attrvalue"] : null), "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : null), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
            echo "</label>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 547
    public function block_button_label($context, array $blocks = array())
    {
    }

    // line 551
    public function block_repeated_row($context, array $blocks = array())
    {
        // line 552
        ob_start();
        // line 553
        echo "    ";
        // line 557
        echo "    ";
        $this->displayBlock("form_rows", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 561
    public function block_form_row($context, array $blocks = array())
    {
        // line 562
        ob_start();
        // line 563
        echo "    ";
        $context["style"] = ((array_key_exists("style", $context)) ? (_twig_default_filter((isset($context["style"]) ? $context["style"] : null), $this->env->getExtension('braincrafted_bootstrap_form')->getStyle())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getStyle()));
        // line 564
        echo "    ";
        $context["col_size"] = ((array_key_exists("col_size", $context)) ? (_twig_default_filter((isset($context["col_size"]) ? $context["col_size"] : null), $this->env->getExtension('braincrafted_bootstrap_form')->getColSize())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getColSize()));
        // line 565
        echo "
    ";
        // line 566
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "label_col", array(), "any", true, true) && (!twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "label_col"))))) {
            // line 567
            echo "        ";
            $context["label_col"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "label_col");
            // line 568
            echo "    ";
        }
        // line 569
        echo "    ";
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_col", array(), "any", true, true) && (!twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_col"))))) {
            // line 570
            echo "        ";
            $context["widget_col"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_col");
            // line 571
            echo "    ";
        }
        // line 572
        echo "    ";
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "col_size", array(), "any", true, true) && (!twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "col_size"))))) {
            // line 573
            echo "        ";
            $context["col_size"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "col_size");
            // line 574
            echo "    ";
        }
        // line 575
        echo "    ";
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "style", array(), "any", true, true) && (!twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "style"))))) {
            // line 576
            echo "        ";
            $context["style"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "style");
            // line 577
            echo "    ";
        }
        // line 578
        echo "
    ";
        // line 579
        $context["label_col"] = ((array_key_exists("label_col", $context)) ? (_twig_default_filter((isset($context["label_col"]) ? $context["label_col"] : null), $this->env->getExtension('braincrafted_bootstrap_form')->getLabelCol())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getLabelCol()));
        // line 580
        echo "    ";
        $context["widget_col"] = ((array_key_exists("widget_col", $context)) ? (_twig_default_filter((isset($context["widget_col"]) ? $context["widget_col"] : null), $this->env->getExtension('braincrafted_bootstrap_form')->getWidgetCol())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getWidgetCol()));
        // line 581
        echo "
    ";
        // line 582
        $context["row_class"] = "";
        // line 583
        echo "    ";
        if (((isset($context["style"]) ? $context["style"] : null) == "horizontal")) {
            // line 584
            echo "        ";
            $context["row_class"] = " row";
            // line 585
            echo "    ";
        }
        // line 586
        echo "
    <div class=\"form-group";
        // line 587
        echo twig_escape_filter($this->env, (isset($context["row_class"]) ? $context["row_class"] : null), "html", null, true);
        if ((!$this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars"), "valid"))) {
            echo " has-error";
        }
        echo "\">
        ";
        // line 588
        if (((isset($context["style"]) ? $context["style"] : null) == "horizontal")) {
            // line 589
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'label');
            echo "
            <div class=\"col-";
            // line 590
            echo twig_escape_filter($this->env, (isset($context["col_size"]) ? $context["col_size"] : null), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, (isset($context["widget_col"]) ? $context["widget_col"] : null), "html", null, true);
            echo "\">
                ";
            // line 591
            $this->displayBlock("form_input_group", $context, $blocks);
            echo "
                ";
            // line 592
            $this->displayBlock("form_help", $context, $blocks);
            echo "
                ";
            // line 593
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
            echo "
            </div>
        ";
        } else {
            // line 596
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'label');
            echo "
            ";
            // line 597
            $this->displayBlock("form_input_group", $context, $blocks);
            echo "
            ";
            // line 598
            $this->displayBlock("form_help", $context, $blocks);
            echo "
            ";
            // line 599
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
            echo "
        ";
        }
        // line 601
        echo "    </div>

    ";
        // line 603
        if (((isset($context["style"]) ? $context["style"] : null) == "inline")) {
            echo "&nbsp;";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 607
    public function block_form_input_group($context, array $blocks = array())
    {
        // line 608
        ob_start();
        // line 609
        echo "    ";
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "input_group", array(), "any", true, true) && (!twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "input_group"))))) {
            // line 610
            echo "        ";
            $context["input_group"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "input_group");
            // line 611
            echo "    ";
        }
        // line 612
        echo "    ";
        $context["input_group"] = ((array_key_exists("input_group", $context)) ? (_twig_default_filter((isset($context["input_group"]) ? $context["input_group"] : null), array())) : (array()));
        // line 613
        echo "    ";
        if ((!twig_test_empty((isset($context["input_group"]) ? $context["input_group"] : null)))) {
            // line 614
            echo "        ";
            $context["ig_size_class"] = "";
            // line 615
            echo "        ";
            if (($this->getAttribute((isset($context["input_group"]) ? $context["input_group"] : null), "size", array(), "any", true, true) && ($this->getAttribute((isset($context["input_group"]) ? $context["input_group"] : null), "size") == "large"))) {
                // line 616
                echo "            ";
                $context["ig_size_class"] = " input-group-lg";
                // line 617
                echo "        ";
            }
            // line 618
            echo "        ";
            if (($this->getAttribute((isset($context["input_group"]) ? $context["input_group"] : null), "size", array(), "any", true, true) && ($this->getAttribute((isset($context["input_group"]) ? $context["input_group"] : null), "size") == "small"))) {
                // line 619
                echo "            ";
                $context["ig_size_class"] = " input-group-sm";
                // line 620
                echo "        ";
            }
            // line 621
            echo "        <div class=\"input-group";
            echo twig_escape_filter($this->env, (isset($context["ig_size_class"]) ? $context["ig_size_class"] : null), "html", null, true);
            echo "\">
            ";
            // line 622
            if (($this->getAttribute((isset($context["input_group"]) ? $context["input_group"] : null), "prepend", array(), "any", true, true) && (!twig_test_empty($this->getAttribute((isset($context["input_group"]) ? $context["input_group"] : null), "prepend"))))) {
                // line 623
                echo "                <span class=\"input-group-addon\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["input_group"]) ? $context["input_group"] : null), "prepend"), "html", null, true);
                echo "</span>
            ";
            }
            // line 625
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
            echo "
            ";
            // line 626
            if (($this->getAttribute((isset($context["input_group"]) ? $context["input_group"] : null), "append", array(), "any", true, true) && (!twig_test_empty($this->getAttribute((isset($context["input_group"]) ? $context["input_group"] : null), "append"))))) {
                // line 627
                echo "                <span class=\"input-group-addon\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["input_group"]) ? $context["input_group"] : null), "append"), "html", null, true);
                echo "</span>
            ";
            }
            // line 629
            echo "        </div>
    ";
        } else {
            // line 631
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
            echo "
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 636
    public function block_form_help($context, array $blocks = array())
    {
        // line 637
        ob_start();
        // line 638
        echo "    ";
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "help_text", array(), "any", true, true) && (!twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "help_text"))))) {
            // line 639
            echo "        ";
            $context["help_text"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "help_text");
            // line 640
            echo "    ";
        }
        // line 641
        echo "    ";
        $context["help_text"] = ((array_key_exists("help_text", $context)) ? (_twig_default_filter((isset($context["help_text"]) ? $context["help_text"] : null), "")) : (""));
        // line 642
        echo "    ";
        if ((!twig_test_empty((isset($context["help_text"]) ? $context["help_text"] : null)))) {
            // line 643
            echo "        <span class=\"help-block\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["help_text"]) ? $context["help_text"] : null), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
            echo "</span>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 648
    public function block_button_row($context, array $blocks = array())
    {
        // line 649
        ob_start();
        // line 650
        echo "    ";
        $context["style"] = ((array_key_exists("style", $context)) ? (_twig_default_filter((isset($context["style"]) ? $context["style"] : null), $this->env->getExtension('braincrafted_bootstrap_form')->getStyle())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getStyle()));
        // line 651
        echo "    ";
        $context["col_size"] = ((array_key_exists("col_size", $context)) ? (_twig_default_filter((isset($context["col_size"]) ? $context["col_size"] : null), $this->env->getExtension('braincrafted_bootstrap_form')->getColSize())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getColSize()));
        // line 652
        echo "
    ";
        // line 653
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "label_col", array(), "any", true, true) && (!twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "label_col"))))) {
            // line 654
            echo "        ";
            $context["label_col"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "label_col");
            // line 655
            echo "    ";
        }
        // line 656
        echo "    ";
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_col", array(), "any", true, true) && (!twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_col"))))) {
            // line 657
            echo "        ";
            $context["widget_col"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_col");
            // line 658
            echo "    ";
        }
        // line 659
        echo "    ";
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "col_size", array(), "any", true, true) && (!twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "col_size"))))) {
            // line 660
            echo "        ";
            $context["col_size"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "col_size");
            // line 661
            echo "    ";
        }
        // line 662
        echo "    ";
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "style", array(), "any", true, true) && (!twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "style"))))) {
            // line 663
            echo "        ";
            $context["style"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "style");
            // line 664
            echo "    ";
        }
        // line 665
        echo "
    ";
        // line 666
        $context["label_col"] = ((array_key_exists("label_col", $context)) ? (_twig_default_filter((isset($context["label_col"]) ? $context["label_col"] : null), $this->env->getExtension('braincrafted_bootstrap_form')->getLabelCol())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getLabelCol()));
        // line 667
        echo "    ";
        $context["widget_col"] = ((array_key_exists("widget_col", $context)) ? (_twig_default_filter((isset($context["widget_col"]) ? $context["widget_col"] : null), $this->env->getExtension('braincrafted_bootstrap_form')->getWidgetCol())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getWidgetCol()));
        // line 668
        echo "
    ";
        // line 669
        if (((isset($context["style"]) ? $context["style"] : null) == "horizontal")) {
            // line 670
            echo "    <div class=\"form-group\">
        <div class=\"col-";
            // line 671
            echo twig_escape_filter($this->env, (isset($context["col_size"]) ? $context["col_size"] : null), "html", null, true);
            echo "-offset-";
            echo twig_escape_filter($this->env, (isset($context["label_col"]) ? $context["label_col"] : null), "html", null, true);
            echo " col-";
            echo twig_escape_filter($this->env, (isset($context["col_size"]) ? $context["col_size"] : null), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, (isset($context["widget_col"]) ? $context["widget_col"] : null), "html", null, true);
            echo "\">
    ";
        }
        // line 673
        echo "
    ";
        // line 674
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "

    ";
        // line 676
        if (((isset($context["style"]) ? $context["style"] : null) == "horizontal")) {
            // line 677
            echo "        </div>
    </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 683
    public function block_hidden_row($context, array $blocks = array())
    {
        // line 684
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
";
    }

    // line 689
    public function block_form($context, array $blocks = array())
    {
        // line 690
        ob_start();
        // line 691
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
        ";
        // line 692
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
    ";
        // line 693
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 697
    public function block_form_start($context, array $blocks = array())
    {
        // line 698
        ob_start();
        // line 699
        echo "    ";
        $context["method"] = twig_upper_filter($this->env, (isset($context["method"]) ? $context["method"] : null));
        // line 700
        echo "    ";
        if (twig_in_filter((isset($context["method"]) ? $context["method"] : null), array(0 => "GET", 1 => "POST"))) {
            // line 701
            echo "        ";
            $context["form_method"] = (isset($context["method"]) ? $context["method"] : null);
            // line 702
            echo "    ";
        } else {
            // line 703
            echo "        ";
            $context["form_method"] = "POST";
            // line 704
            echo "    ";
        }
        // line 705
        echo "
    ";
        // line 706
        if (array_key_exists("style", $context)) {
            // line 707
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => trim((((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class"), "")) : ("")) . " form-") . (isset($context["style"]) ? $context["style"] : null)))));
            // line 708
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('braincrafted_bootstrap_form')->setStyle((isset($context["style"]) ? $context["style"] : null)), "html", null, true);
            echo "
    ";
        }
        // line 710
        echo "
    ";
        // line 711
        if (array_key_exists("col_size", $context)) {
            // line 712
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('braincrafted_bootstrap_form')->setColSize((isset($context["col_size"]) ? $context["col_size"] : null)), "html", null, true);
            echo "
    ";
        }
        // line 714
        echo "
    ";
        // line 715
        if (array_key_exists("widget_col", $context)) {
            // line 716
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('braincrafted_bootstrap_form')->setWidgetCol((isset($context["widget_col"]) ? $context["widget_col"] : null)), "html", null, true);
            echo "
    ";
        }
        // line 718
        echo "
    ";
        // line 719
        if (array_key_exists("label_col", $context)) {
            // line 720
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('braincrafted_bootstrap_form')->setLabelCol((isset($context["label_col"]) ? $context["label_col"] : null)), "html", null, true);
            echo "
    ";
        }
        // line 722
        echo "
    ";
        // line 723
        if (array_key_exists("simple_col", $context)) {
            // line 724
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('braincrafted_bootstrap_form')->setSimpleCol((isset($context["simple_col"]) ? $context["simple_col"] : null)), "html", null, true);
            echo "
    ";
        }
        // line 726
        echo "
    ";
        // line 727
        if (((!$this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "role", array(), "any", true, true)) || twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "role")))) {
            // line 728
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("role" => "form"));
            // line 729
            echo "    ";
        }
        // line 730
        echo "
    <form  name=\"";
        // line 731
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars"), "name"), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["form_method"]) ? $context["form_method"] : null)), "html", null, true);
        echo "\" action=\"";
        echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : null), "html", null, true);
        echo "\"";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : null));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["attrname"]) ? $context["attrname"] : null), "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, (isset($context["attrvalue"]) ? $context["attrvalue"] : null), "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        if ((isset($context["multipart"]) ? $context["multipart"] : null)) {
            echo " enctype=\"multipart/form-data\"";
        }
        echo ">
    ";
        // line 732
        if (((isset($context["form_method"]) ? $context["form_method"] : null) != (isset($context["method"]) ? $context["method"] : null))) {
            // line 733
            echo "        <input type=\"hidden\" name=\"_method\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["method"]) ? $context["method"] : null), "html", null, true);
            echo "\" />
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 738
    public function block_form_end($context, array $blocks = array())
    {
        // line 739
        ob_start();
        // line 740
        echo "    ";
        if (((!array_key_exists("render_rest", $context)) || (isset($context["render_rest"]) ? $context["render_rest"] : null))) {
            // line 741
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
            echo "
    ";
        }
        // line 743
        echo "    </form>
    ";
        // line 744
        if ($this->env->getExtension('braincrafted_bootstrap_form')->getStyle()) {
            // line 745
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('braincrafted_bootstrap_form')->setStyle(""), "html", null, true);
            echo "
    ";
        }
        // line 747
        echo "    ";
        if ($this->env->getExtension('braincrafted_bootstrap_form')->getColSize()) {
            // line 748
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('braincrafted_bootstrap_form')->setColSize("lg"), "html", null, true);
            echo "
    ";
        }
        // line 750
        echo "    ";
        if ($this->env->getExtension('braincrafted_bootstrap_form')->getWidgetCol()) {
            // line 751
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('braincrafted_bootstrap_form')->setWidgetCol(10), "html", null, true);
            echo "
    ";
        }
        // line 753
        echo "    ";
        if ($this->env->getExtension('braincrafted_bootstrap_form')->getLabelCol()) {
            // line 754
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('braincrafted_bootstrap_form')->setLabelCol(2), "html", null, true);
            echo "
    ";
        }
        // line 756
        echo "    ";
        if ($this->env->getExtension('braincrafted_bootstrap_form')->getSimpleCol()) {
            // line 757
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('braincrafted_bootstrap_form')->setSimpleCol(false), "html", null, true);
            echo "
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 762
    public function block_form_enctype($context, array $blocks = array())
    {
        // line 763
        ob_start();
        // line 764
        echo "    ";
        if ((isset($context["multipart"]) ? $context["multipart"] : null)) {
            echo "enctype=\"multipart/form-data\"";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 768
    public function block_global_form_errors($context, array $blocks = array())
    {
        // line 769
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
            // line 770
            echo "        ";
            $context["global_errors"] = true;
            // line 771
            echo "        ";
            $this->displayBlock("form_errors", $context, $blocks);
            echo "
    ";
        }
    }

    // line 775
    public function block_form_errors($context, array $blocks = array())
    {
        // line 776
        ob_start();
        // line 777
        echo "    ";
        $context["global_errors"] = ((array_key_exists("global_errors", $context)) ? (_twig_default_filter((isset($context["global_errors"]) ? $context["global_errors"] : null), false)) : (false));
        // line 778
        echo "    ";
        $context["style"] = ((array_key_exists("style", $context)) ? (_twig_default_filter((isset($context["style"]) ? $context["style"] : null), $this->env->getExtension('braincrafted_bootstrap_form')->getStyle())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getStyle()));
        // line 779
        echo "
    ";
        // line 780
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "style", array(), "any", true, true) && (!twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "style"))))) {
            // line 781
            echo "        ";
            $context["style"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "style");
            // line 782
            echo "    ";
        }
        // line 783
        echo "
    ";
        // line 784
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
            // line 785
            echo "        ";
            if ((isset($context["global_errors"]) ? $context["global_errors"] : null)) {
                // line 786
                echo "            <div class=\"alert alert-danger\">
        ";
            }
            // line 788
            echo "        <ul";
            if ((!(isset($context["global_errors"]) ? $context["global_errors"] : null))) {
                echo " class=\"help-block\"";
            }
            echo ">
            ";
            // line 789
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 790
                echo "                <li>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "message"), $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageParameters"), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 792
            echo "        </ul>
        ";
            // line 793
            if (((isset($context["global_errors"]) ? $context["global_errors"] : null) == true)) {
                // line 794
                echo "            </div>
        ";
            }
            // line 796
            echo "    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 800
    public function block_form_rest($context, array $blocks = array())
    {
        // line 801
        ob_start();
        // line 802
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 803
            echo "        ";
            if ((!$this->getAttribute((isset($context["child"]) ? $context["child"] : null), "rendered"))) {
                // line 804
                echo "            ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : null), 'row');
                echo "
        ";
            }
            // line 806
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 812
    public function block_form_rows($context, array $blocks = array())
    {
        // line 813
        ob_start();
        // line 814
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 815
            echo "        ";
            $context["childAttr"] = array();
            // line 816
            echo "        ";
            if ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "col_size", array(), "any", true, true)) {
                // line 817
                echo "            ";
                $context["childAttr"] = twig_array_merge((isset($context["childAttr"]) ? $context["childAttr"] : null), array("col_size" => $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "col_size")));
                // line 818
                echo "        ";
            }
            // line 819
            echo "        ";
            if ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_col", array(), "any", true, true)) {
                // line 820
                echo "            ";
                $context["childAttr"] = twig_array_merge((isset($context["childAttr"]) ? $context["childAttr"] : null), array("widget_col" => $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_col")));
                // line 821
                echo "        ";
            }
            // line 822
            echo "        ";
            if ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "label_col", array(), "any", true, true)) {
                // line 823
                echo "            ";
                $context["childAttr"] = twig_array_merge((isset($context["childAttr"]) ? $context["childAttr"] : null), array("label_col" => $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "label_col")));
                // line 824
                echo "        ";
            }
            // line 825
            echo "        ";
            if ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "simple_col", array(), "any", true, true)) {
                // line 826
                echo "            ";
                $context["childAttr"] = twig_array_merge((isset($context["childAttr"]) ? $context["childAttr"] : null), array("simple_col" => $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "simple_col")));
                // line 827
                echo "        ";
            }
            // line 828
            echo "        ";
            if ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "style", array(), "any", true, true)) {
                // line 829
                echo "            ";
                $context["childAttr"] = twig_array_merge((isset($context["childAttr"]) ? $context["childAttr"] : null), array("style" => $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "style")));
                // line 830
                echo "        ";
            }
            // line 831
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : null), 'row', (isset($context["childAttr"]) ? $context["childAttr"] : null));
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 836
    public function block_widget_attributes($context, array $blocks = array())
    {
        // line 837
        ob_start();
        // line 838
        echo "    id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : null), "html", null, true);
        echo "\"";
        if ((isset($context["read_only"]) ? $context["read_only"] : null)) {
            echo " readonly=\"readonly\"";
        }
        if ((isset($context["disabled"]) ? $context["disabled"] : null)) {
            echo " disabled=\"disabled\"";
        }
        if ((isset($context["required"]) ? $context["required"] : null)) {
            echo " required=\"required\"";
        }
        if ((isset($context["max_length"]) ? $context["max_length"] : null)) {
            echo " maxlength=\"";
            echo twig_escape_filter($this->env, (isset($context["max_length"]) ? $context["max_length"] : null), "html", null, true);
            echo "\"";
        }
        if ((isset($context["pattern"]) ? $context["pattern"] : null)) {
            echo " pattern=\"";
            echo twig_escape_filter($this->env, (isset($context["pattern"]) ? $context["pattern"] : null), "html", null, true);
            echo "\"";
        }
        // line 839
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : null));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            if (twig_in_filter((isset($context["attrname"]) ? $context["attrname"] : null), array(0 => "placeholder", 1 => "title"))) {
                echo twig_escape_filter($this->env, (isset($context["attrname"]) ? $context["attrname"] : null), "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["attrvalue"]) ? $context["attrvalue"] : null), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
                echo "\" ";
            } elseif (twig_in_filter((isset($context["attrname"]) ? $context["attrname"] : null), array(0 => "input_group"))) {
            } else {
                echo twig_escape_filter($this->env, (isset($context["attrname"]) ? $context["attrname"] : null), "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, (isset($context["attrvalue"]) ? $context["attrvalue"] : null), "html", null, true);
                echo "\" ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 843
    public function block_widget_container_attributes($context, array $blocks = array())
    {
        // line 844
        ob_start();
        // line 845
        echo "    ";
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "style", array(), "any", true, true) && (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "style") == "inline") || ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "style") == "horizontal")))) {
            // line 846
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => (("form-" . $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "style")) . (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class"), "")) : ("")))));
            // line 847
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("style" => null));
            // line 848
            echo "    ";
        }
        // line 849
        echo "    ";
        if ((!twig_test_empty((isset($context["id"]) ? $context["id"] : null)))) {
            echo "id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\" ";
        }
        // line 850
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : null));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            if ((!(null === (isset($context["attrvalue"]) ? $context["attrvalue"] : null)))) {
                echo twig_escape_filter($this->env, (isset($context["attrname"]) ? $context["attrname"] : null), "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, (isset($context["attrvalue"]) ? $context["attrvalue"] : null), "html", null, true);
                echo "\" ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 854
    public function block_button_attributes($context, array $blocks = array())
    {
        // line 855
        ob_start();
        // line 856
        echo "    id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : null), "html", null, true);
        echo "\"";
        if ((isset($context["disabled"]) ? $context["disabled"] : null)) {
            echo " disabled=\"disabled\"";
        }
        // line 857
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : null));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo twig_escape_filter($this->env, (isset($context["attrname"]) ? $context["attrname"] : null), "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, (isset($context["attrvalue"]) ? $context["attrvalue"] : null), "html", null, true);
            echo "\" ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "BraincraftedBootstrapBundle:Form:bootstrap.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  2739 => 857,  2730 => 856,  2728 => 855,  2725 => 854,  2707 => 850,  2700 => 849,  2697 => 848,  2694 => 847,  2691 => 846,  2688 => 845,  2686 => 844,  2683 => 843,  2659 => 839,  2634 => 838,  2632 => 837,  2629 => 836,  2617 => 831,  2614 => 830,  2611 => 829,  2608 => 828,  2605 => 827,  2602 => 826,  2599 => 825,  2596 => 824,  2593 => 823,  2590 => 822,  2587 => 821,  2584 => 820,  2581 => 819,  2578 => 818,  2575 => 817,  2572 => 816,  2569 => 815,  2564 => 814,  2562 => 813,  2559 => 812,  2550 => 806,  2544 => 804,  2541 => 803,  2536 => 802,  2534 => 801,  2531 => 800,  2525 => 796,  2521 => 794,  2519 => 793,  2516 => 792,  2507 => 790,  2503 => 789,  2496 => 788,  2492 => 786,  2489 => 785,  2487 => 784,  2484 => 783,  2481 => 782,  2478 => 781,  2476 => 780,  2473 => 779,  2470 => 778,  2467 => 777,  2465 => 776,  2462 => 775,  2454 => 771,  2451 => 770,  2448 => 769,  2445 => 768,  2437 => 764,  2435 => 763,  2432 => 762,  2423 => 757,  2420 => 756,  2414 => 754,  2411 => 753,  2405 => 751,  2402 => 750,  2396 => 748,  2393 => 747,  2387 => 745,  2385 => 744,  2382 => 743,  2376 => 741,  2373 => 740,  2371 => 739,  2368 => 738,  2359 => 733,  2357 => 732,  2333 => 731,  2330 => 730,  2327 => 729,  2324 => 728,  2322 => 727,  2319 => 726,  2313 => 724,  2311 => 723,  2308 => 722,  2302 => 720,  2300 => 719,  2297 => 718,  2291 => 716,  2289 => 715,  2286 => 714,  2280 => 712,  2278 => 711,  2275 => 710,  2269 => 708,  2266 => 707,  2264 => 706,  2261 => 705,  2258 => 704,  2255 => 703,  2252 => 702,  2249 => 701,  2246 => 700,  2243 => 699,  2241 => 698,  2238 => 697,  2231 => 693,  2227 => 692,  2222 => 691,  2220 => 690,  2217 => 689,  2210 => 684,  2207 => 683,  2199 => 677,  2197 => 676,  2192 => 674,  2189 => 673,  2178 => 671,  2175 => 670,  2173 => 669,  2170 => 668,  2167 => 667,  2165 => 666,  2162 => 665,  2159 => 664,  2156 => 663,  2153 => 662,  2150 => 661,  2147 => 660,  2144 => 659,  2141 => 658,  2138 => 657,  2135 => 656,  2132 => 655,  2129 => 654,  2127 => 653,  2124 => 652,  2121 => 651,  2118 => 650,  2116 => 649,  2113 => 648,  2104 => 643,  2101 => 642,  2098 => 641,  2095 => 640,  2092 => 639,  2089 => 638,  2087 => 637,  2084 => 636,  2075 => 631,  2071 => 629,  2065 => 627,  2063 => 626,  2058 => 625,  2052 => 623,  2050 => 622,  2045 => 621,  2042 => 620,  2039 => 619,  2036 => 618,  2033 => 617,  2030 => 616,  2027 => 615,  2024 => 614,  2021 => 613,  2018 => 612,  2015 => 611,  2012 => 610,  2009 => 609,  2007 => 608,  2004 => 607,  1997 => 603,  1993 => 601,  1988 => 599,  1984 => 598,  1980 => 597,  1975 => 596,  1969 => 593,  1965 => 592,  1961 => 591,  1955 => 590,  1950 => 589,  1948 => 588,  1941 => 587,  1938 => 586,  1935 => 585,  1932 => 584,  1929 => 583,  1927 => 582,  1924 => 581,  1921 => 580,  1919 => 579,  1916 => 578,  1913 => 577,  1910 => 576,  1907 => 575,  1904 => 574,  1901 => 573,  1898 => 572,  1895 => 571,  1892 => 570,  1889 => 569,  1886 => 568,  1883 => 567,  1881 => 566,  1878 => 565,  1875 => 564,  1872 => 563,  1870 => 562,  1867 => 561,  1859 => 557,  1857 => 553,  1855 => 552,  1852 => 551,  1847 => 547,  1825 => 542,  1822 => 541,  1819 => 540,  1816 => 539,  1813 => 538,  1810 => 537,  1807 => 536,  1804 => 535,  1801 => 534,  1799 => 533,  1796 => 532,  1793 => 531,  1790 => 530,  1787 => 529,  1784 => 528,  1781 => 527,  1779 => 526,  1776 => 525,  1773 => 524,  1770 => 523,  1768 => 522,  1765 => 521,  1762 => 520,  1759 => 519,  1757 => 518,  1754 => 517,  1751 => 516,  1748 => 515,  1745 => 514,  1742 => 513,  1739 => 512,  1736 => 511,  1733 => 510,  1730 => 509,  1728 => 508,  1725 => 507,  1722 => 506,  1720 => 505,  1717 => 504,  1709 => 498,  1706 => 497,  1704 => 496,  1701 => 495,  1693 => 491,  1690 => 490,  1688 => 489,  1685 => 488,  1673 => 484,  1670 => 483,  1667 => 482,  1664 => 481,  1661 => 480,  1658 => 479,  1655 => 478,  1652 => 477,  1649 => 476,  1647 => 475,  1644 => 474,  1636 => 470,  1633 => 469,  1631 => 468,  1628 => 467,  1620 => 463,  1617 => 462,  1615 => 461,  1612 => 460,  1604 => 456,  1601 => 455,  1599 => 454,  1596 => 453,  1587 => 447,  1584 => 446,  1581 => 445,  1579 => 444,  1576 => 443,  1568 => 439,  1565 => 438,  1563 => 437,  1560 => 436,  1552 => 432,  1549 => 431,  1547 => 430,  1544 => 429,  1537 => 424,  1535 => 420,  1532 => 419,  1530 => 418,  1527 => 417,  1519 => 413,  1516 => 412,  1514 => 411,  1511 => 410,  1503 => 406,  1500 => 405,  1498 => 404,  1496 => 403,  1493 => 402,  1486 => 397,  1480 => 396,  1475 => 395,  1471 => 394,  1466 => 393,  1463 => 392,  1460 => 391,  1454 => 389,  1451 => 388,  1449 => 387,  1446 => 386,  1438 => 380,  1436 => 379,  1435 => 378,  1434 => 377,  1433 => 376,  1428 => 375,  1425 => 374,  1419 => 372,  1416 => 371,  1414 => 370,  1411 => 369,  1402 => 363,  1398 => 362,  1394 => 361,  1390 => 360,  1385 => 359,  1382 => 358,  1376 => 356,  1373 => 355,  1371 => 354,  1368 => 353,  1352 => 349,  1350 => 348,  1347 => 347,  1331 => 343,  1329 => 342,  1326 => 341,  1319 => 336,  1314 => 333,  1312 => 332,  1306 => 330,  1300 => 328,  1294 => 325,  1290 => 324,  1274 => 323,  1271 => 322,  1268 => 321,  1265 => 320,  1262 => 319,  1259 => 318,  1256 => 317,  1253 => 316,  1250 => 315,  1247 => 314,  1245 => 313,  1241 => 311,  1233 => 309,  1228 => 307,  1221 => 306,  1218 => 305,  1215 => 304,  1212 => 303,  1210 => 302,  1207 => 301,  1204 => 300,  1201 => 299,  1198 => 298,  1195 => 297,  1192 => 296,  1189 => 295,  1186 => 294,  1183 => 293,  1181 => 292,  1178 => 291,  1176 => 290,  1173 => 289,  1170 => 288,  1168 => 287,  1165 => 286,  1158 => 282,  1155 => 281,  1151 => 279,  1146 => 276,  1144 => 275,  1138 => 273,  1132 => 271,  1126 => 268,  1122 => 267,  1106 => 266,  1103 => 265,  1100 => 264,  1097 => 263,  1094 => 262,  1091 => 261,  1088 => 260,  1085 => 259,  1082 => 258,  1079 => 257,  1077 => 256,  1074 => 255,  1066 => 253,  1061 => 251,  1054 => 250,  1051 => 249,  1048 => 248,  1045 => 247,  1042 => 246,  1040 => 245,  1037 => 244,  1034 => 243,  1031 => 242,  1028 => 241,  1025 => 240,  1022 => 239,  1019 => 238,  1016 => 237,  1013 => 236,  1010 => 235,  1007 => 234,  1004 => 233,  1002 => 232,  999 => 231,  996 => 230,  993 => 229,  991 => 228,  988 => 227,  971 => 223,  959 => 221,  952 => 218,  950 => 217,  945 => 216,  942 => 215,  924 => 214,  922 => 213,  919 => 212,  910 => 207,  907 => 206,  904 => 205,  898 => 203,  896 => 202,  891 => 201,  888 => 200,  885 => 199,  870 => 197,  868 => 196,  861 => 195,  858 => 194,  855 => 193,  853 => 192,  850 => 191,  844 => 187,  838 => 186,  832 => 184,  826 => 182,  823 => 181,  819 => 180,  814 => 179,  812 => 178,  809 => 177,  800 => 172,  794 => 170,  791 => 169,  789 => 168,  786 => 167,  779 => 162,  777 => 161,  764 => 159,  761 => 158,  753 => 156,  751 => 155,  748 => 154,  745 => 153,  742 => 152,  740 => 151,  737 => 150,  734 => 149,  731 => 148,  729 => 147,  726 => 146,  723 => 145,  721 => 144,  718 => 143,  711 => 138,  709 => 137,  702 => 135,  699 => 134,  697 => 133,  694 => 132,  686 => 130,  684 => 129,  681 => 128,  678 => 127,  675 => 126,  672 => 125,  669 => 124,  666 => 123,  664 => 122,  661 => 121,  658 => 120,  656 => 119,  653 => 118,  647 => 114,  637 => 112,  635 => 111,  632 => 110,  624 => 107,  616 => 104,  611 => 103,  609 => 102,  604 => 100,  600 => 99,  596 => 98,  592 => 96,  588 => 95,  582 => 93,  579 => 92,  576 => 91,  574 => 90,  571 => 89,  568 => 88,  565 => 87,  562 => 86,  559 => 85,  556 => 84,  553 => 83,  550 => 82,  547 => 81,  544 => 80,  541 => 79,  539 => 78,  536 => 77,  528 => 73,  525 => 72,  522 => 71,  519 => 70,  517 => 69,  514 => 68,  506 => 63,  501 => 62,  495 => 60,  493 => 59,  488 => 58,  486 => 57,  483 => 56,  476 => 51,  458 => 47,  455 => 46,  452 => 45,  449 => 44,  446 => 43,  443 => 42,  438 => 40,  432 => 38,  419 => 34,  417 => 33,  414 => 32,  411 => 31,  408 => 30,  405 => 29,  399 => 27,  396 => 26,  390 => 24,  376 => 19,  373 => 18,  370 => 17,  356 => 10,  350 => 8,  347 => 7,  345 => 6,  342 => 5,  338 => 854,  335 => 853,  333 => 843,  330 => 842,  328 => 836,  325 => 835,  323 => 812,  320 => 811,  317 => 809,  315 => 800,  310 => 775,  307 => 774,  302 => 767,  300 => 762,  297 => 761,  295 => 738,  292 => 737,  290 => 697,  287 => 696,  282 => 688,  279 => 686,  277 => 683,  274 => 682,  272 => 648,  267 => 636,  262 => 607,  259 => 606,  257 => 561,  249 => 550,  244 => 547,  239 => 504,  236 => 503,  233 => 501,  231 => 495,  228 => 494,  226 => 488,  223 => 487,  218 => 473,  216 => 467,  213 => 466,  198 => 442,  191 => 429,  188 => 428,  181 => 410,  178 => 409,  153 => 346,  148 => 340,  14 => 1,  225 => 60,  211 => 460,  206 => 453,  200 => 52,  192 => 50,  174 => 44,  190 => 49,  186 => 417,  172 => 53,  150 => 37,  134 => 42,  90 => 31,  126 => 177,  152 => 56,  120 => 58,  100 => 40,  139 => 43,  113 => 142,  23 => 1,  110 => 30,  104 => 37,  96 => 56,  76 => 26,  53 => 5,  180 => 46,  161 => 353,  146 => 286,  137 => 33,  118 => 166,  114 => 27,  84 => 32,  127 => 62,  77 => 17,  70 => 27,  65 => 17,  58 => 15,  52 => 12,  34 => 8,  145 => 48,  97 => 29,  83 => 4,  81 => 30,  74 => 16,  37 => 8,  480 => 162,  474 => 50,  469 => 158,  461 => 48,  457 => 153,  453 => 151,  444 => 149,  440 => 41,  437 => 147,  435 => 39,  430 => 37,  427 => 36,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 28,  398 => 129,  393 => 25,  387 => 23,  384 => 22,  381 => 21,  379 => 20,  374 => 116,  368 => 16,  365 => 15,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 799,  309 => 97,  305 => 768,  298 => 91,  294 => 90,  285 => 689,  283 => 88,  278 => 86,  268 => 85,  264 => 635,  258 => 81,  252 => 551,  247 => 78,  241 => 546,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 34,  132 => 17,  128 => 190,  111 => 118,  107 => 36,  61 => 22,  273 => 96,  269 => 647,  254 => 560,  246 => 548,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 474,  219 => 58,  217 => 75,  208 => 459,  204 => 72,  179 => 69,  159 => 40,  143 => 285,  135 => 62,  131 => 191,  119 => 51,  108 => 117,  102 => 34,  71 => 25,  67 => 26,  63 => 6,  59 => 25,  47 => 12,  29 => 5,  94 => 32,  89 => 24,  85 => 31,  79 => 21,  75 => 25,  68 => 24,  56 => 21,  50 => 11,  43 => 10,  28 => 6,  38 => 9,  24 => 3,  87 => 28,  72 => 25,  55 => 14,  41 => 10,  26 => 4,  35 => 10,  31 => 7,  201 => 443,  196 => 436,  183 => 416,  171 => 386,  166 => 369,  163 => 368,  158 => 352,  156 => 347,  151 => 341,  142 => 35,  138 => 226,  136 => 212,  123 => 176,  121 => 167,  117 => 32,  115 => 43,  105 => 40,  101 => 68,  91 => 15,  69 => 18,  66 => 23,  62 => 16,  49 => 14,  25 => 4,  21 => 2,  19 => 1,  98 => 67,  93 => 55,  88 => 14,  78 => 34,  46 => 17,  44 => 16,  40 => 9,  32 => 6,  27 => 5,  22 => 1,  209 => 55,  203 => 452,  199 => 67,  193 => 435,  189 => 71,  187 => 48,  182 => 66,  176 => 402,  173 => 401,  168 => 385,  164 => 59,  162 => 49,  154 => 47,  149 => 51,  147 => 54,  144 => 49,  141 => 227,  133 => 211,  130 => 41,  125 => 43,  122 => 39,  116 => 143,  112 => 53,  109 => 34,  106 => 77,  103 => 76,  99 => 21,  95 => 33,  92 => 34,  86 => 5,  82 => 22,  80 => 2,  73 => 28,  64 => 14,  60 => 22,  57 => 22,  54 => 22,  51 => 20,  48 => 16,  45 => 11,  42 => 16,  39 => 10,  36 => 13,  33 => 6,  30 => 7,);
    }
}
