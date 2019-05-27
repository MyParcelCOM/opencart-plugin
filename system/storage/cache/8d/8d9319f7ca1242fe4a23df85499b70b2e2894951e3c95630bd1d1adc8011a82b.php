<?php

/* sale/order_form.twig */
class __TwigTemplate_fcef3fe1aa2963b50de14cf171a824de06d7b3568c6a5d3cde715dac77486e43 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo (isset($context["header"]) ? $context["header"] : null);
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\"><a href=\"";
        // line 5
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i> ";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "</a></div>
      <h1>";
        // line 6
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 9
            echo "        <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 17
        echo (isset($context["text_form"]) ? $context["text_form"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form class=\"form-horizontal\">
          <ul id=\"order\" class=\"nav nav-tabs nav-justified\">
            <li class=\"disabled active\"><a href=\"#tab-customer\" data-toggle=\"tab\">1. ";
        // line 22
        echo (isset($context["tab_customer"]) ? $context["tab_customer"] : null);
        echo "</a></li>
            <li class=\"disabled\"><a href=\"#tab-cart\" data-toggle=\"tab\">2. ";
        // line 23
        echo (isset($context["tab_product"]) ? $context["tab_product"] : null);
        echo "</a></li>
            <li class=\"disabled\"><a href=\"#tab-payment\" data-toggle=\"tab\">3. ";
        // line 24
        echo (isset($context["tab_payment"]) ? $context["tab_payment"] : null);
        echo "</a></li>
            <li class=\"disabled\"><a href=\"#tab-shipping\" data-toggle=\"tab\">4. ";
        // line 25
        echo (isset($context["tab_shipping"]) ? $context["tab_shipping"] : null);
        echo "</a></li>
            <li class=\"disabled\"><a href=\"#tab-total\" data-toggle=\"tab\">5. ";
        // line 26
        echo (isset($context["tab_total"]) ? $context["tab_total"] : null);
        echo "</a></li>
          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-customer\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-store\">";
        // line 31
        echo (isset($context["entry_store"]) ? $context["entry_store"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"store_id\" id=\"input-store\" class=\"form-control\">
                    ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 35
            echo "                    ";
            if (($this->getAttribute($context["store"], "store_id", array()) == (isset($context["store_id"]) ? $context["store_id"] : null))) {
                // line 36
                echo "                    <option value=\"";
                echo $this->getAttribute($context["store"], "store_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["store"], "name", array());
                echo "</option>
                    ";
            } else {
                // line 38
                echo "                    <option value=\"";
                echo $this->getAttribute($context["store"], "store_id", array());
                echo "\">";
                echo $this->getAttribute($context["store"], "name", array());
                echo "</option>
                    ";
            }
            // line 40
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-currency\">";
        // line 45
        echo (isset($context["entry_currency"]) ? $context["entry_currency"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"currency\" id=\"input-currency\" class=\"form-control\">
                    ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["currencies"]) ? $context["currencies"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
            // line 49
            echo "                    ";
            if (($this->getAttribute($context["currency"], "code", array()) == (isset($context["currency_code"]) ? $context["currency_code"] : null))) {
                // line 50
                echo "                    <option value=\"";
                echo $this->getAttribute($context["currency"], "code", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["currency"], "title", array());
                echo "</option>
                    ";
            } else {
                // line 52
                echo "                    <option value=\"";
                echo $this->getAttribute($context["currency"], "code", array());
                echo "\">";
                echo $this->getAttribute($context["currency"], "title", array());
                echo "</option>
                    ";
            }
            // line 54
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-customer\">";
        // line 59
        echo (isset($context["entry_customer"]) ? $context["entry_customer"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"customer\" value=\"";
        // line 61
        echo (isset($context["customer"]) ? $context["customer"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_customer"]) ? $context["entry_customer"] : null);
        echo "\" id=\"input-customer\" class=\"form-control\" />
                  <input type=\"hidden\" name=\"customer_id\" value=\"";
        // line 62
        echo (isset($context["customer_id"]) ? $context["customer_id"] : null);
        echo "\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-customer-group\">";
        // line 66
        echo (isset($context["entry_customer_group"]) ? $context["entry_customer_group"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"customer_group_id\" id=\"input-customer-group\" class=\"form-control\">
                    ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 70
            echo "                    ";
            if (($this->getAttribute($context["customer_group"], "customer_group_id", array()) == (isset($context["customer_group_id"]) ? $context["customer_group_id"] : null))) {
                // line 71
                echo "                    <option value=\"";
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["customer_group"], "name", array());
                echo "</option>
                    ";
            } else {
                // line 73
                echo "                    <option value=\"";
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\">";
                echo $this->getAttribute($context["customer_group"], "name", array());
                echo "</option>
                    ";
            }
            // line 75
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-firstname\">";
        // line 80
        echo (isset($context["entry_firstname"]) ? $context["entry_firstname"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"firstname\" value=\"";
        // line 82
        echo (isset($context["firstname"]) ? $context["firstname"] : null);
        echo "\" id=\"input-firstname\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-lastname\">";
        // line 86
        echo (isset($context["entry_lastname"]) ? $context["entry_lastname"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"lastname\" value=\"";
        // line 88
        echo (isset($context["lastname"]) ? $context["lastname"] : null);
        echo "\" id=\"input-lastname\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-email\">";
        // line 92
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"email\" value=\"";
        // line 94
        echo (isset($context["email"]) ? $context["email"] : null);
        echo "\" id=\"input-email\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-telephone\">";
        // line 98
        echo (isset($context["entry_telephone"]) ? $context["entry_telephone"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"telephone\" value=\"";
        // line 100
        echo (isset($context["telephone"]) ? $context["telephone"] : null);
        echo "\" id=\"input-telephone\" class=\"form-control\" />
                </div>
              </div>
              ";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["custom_fields"]) ? $context["custom_fields"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 104
            echo "              ";
            if (($this->getAttribute($context["custom_field"], "location", array()) == "account")) {
                // line 105
                echo "              ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "select")) {
                    // line 106
                    echo "              <div class=\"form-group custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 3);
                    echo "\">
                <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 107
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"custom_field[";
                    // line 109
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" id=\"input-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\">
                    <option value=\"\">";
                    // line 110
                    echo (isset($context["text_select"]) ? $context["text_select"] : null);
                    echo "</option>
                    ";
                    // line 111
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 112
                        echo "                    ";
                        if (($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && ($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()) == $this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                            // line 113
                            echo "                    <option value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" selected=\"selected\">";
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</option>
                    ";
                        } else {
                            // line 115
                            echo "                    <option value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\">";
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</option>
                    ";
                        }
                        // line 117
                        echo "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 118
                    echo "                  </select>
                </div>
              </div>
              ";
                }
                // line 122
                echo "              ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "radio")) {
                    // line 123
                    echo "              <div class=\"form-group custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 3);
                    echo "\">
                <label class=\"col-sm-2 control-label\">";
                    // line 124
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
                <div class=\"col-sm-10\">
                  <div id=\"input-custom-field";
                    // line 126
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">
                    ";
                    // line 127
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 128
                        echo "                    <div class=\"radio\">
                      ";
                        // line 129
                        if (($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && ($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()) == $this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                            // line 130
                            echo "                      <label>
                        <input type=\"radio\" name=\"custom_field[";
                            // line 131
                            echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                            echo "]\" value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" checked=\"checked\" />
                        ";
                            // line 132
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</label>
                      ";
                        } else {
                            // line 134
                            echo "                      <label>
                        <input type=\"radio\" name=\"custom_field[";
                            // line 135
                            echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                            echo "]\" value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" />
                        ";
                            // line 136
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</label>
                      ";
                        }
                        // line 138
                        echo "                    </div>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 140
                    echo "                  </div>
                </div>
              </div>
              ";
                }
                // line 144
                echo "              ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "checkbox")) {
                    // line 145
                    echo "              <div class=\"form-group custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 3);
                    echo "\">
                <label class=\"col-sm-2 control-label\">";
                    // line 146
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
                <div class=\"col-sm-10\">
                  <div id=\"input-custom-field";
                    // line 148
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">
                    ";
                    // line 149
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 150
                        echo "                    <div class=\"checkbox\">
                      ";
                        // line 151
                        if (($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && twig_in_filter($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()), $this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                            // line 152
                            echo "                      <label>
                        <input type=\"checkbox\" name=\"custom_field[";
                            // line 153
                            echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                            echo "][]\" value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" checked=\"checked\" />
                        ";
                            // line 154
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</label>
                      ";
                        } else {
                            // line 156
                            echo "                      <label>
                        <input type=\"checkbox\" name=\"custom_field[";
                            // line 157
                            echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                            echo "][]\" value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" />
                        ";
                            // line 158
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</label>
                      ";
                        }
                        // line 160
                        echo "                    </div>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 162
                    echo "                  </div>
                </div>
              </div>
              ";
                }
                // line 166
                echo "              ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "text")) {
                    // line 167
                    echo "              <div class=\"form-group custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 3);
                    echo "\">
                <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 168
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"custom_field[";
                    // line 170
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo (($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) ? ($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) : ($this->getAttribute($context["custom_field"], "value", array())));
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" id=\"input-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\" />
                </div>
              </div>
              ";
                }
                // line 174
                echo "              ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "textarea")) {
                    // line 175
                    echo "              <div class=\"form-group custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 3);
                    echo "\">
                <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 176
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"custom_field[";
                    // line 178
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" id=\"input-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\">";
                    echo $this->getAttribute($context["custom_field"], "value", array());
                    echo "</textarea>
                </div>
              </div>
              ";
                }
                // line 182
                echo "              ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "file")) {
                    // line 183
                    echo "              <div class=\"form-group custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 3);
                    echo "\">
                <label class=\"col-sm-2 control-label\">";
                    // line 184
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
                <div class=\"col-sm-10\">
                  <button type=\"button\" id=\"button-custom-field";
                    // line 186
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> ";
                    echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
                    echo "</button>
                  <input type=\"hidden\" name=\"custom_field[";
                    // line 187
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo (($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) ? ($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) : (""));
                    echo "\" id=\"input-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" />
                </div>
              </div>
              ";
                }
                // line 191
                echo "              ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "date")) {
                    // line 192
                    echo "              <div class=\"form-group custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 3);
                    echo "\">
                <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 193
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"input-group date\">
                    <input type=\"text\" name=\"custom_field[";
                    // line 196
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo (($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) ? ($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) : ($this->getAttribute($context["custom_field"], "value", array())));
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\" />
                    <span class=\"input-group-btn\">
                    <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                    </span></div>
                </div>
              </div>
              ";
                }
                // line 203
                echo "              ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "time")) {
                    // line 204
                    echo "              <div class=\"form-group custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 3);
                    echo "\">
                <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 205
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"input-group time\">
                    <input type=\"text\" name=\"custom_field[";
                    // line 208
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo (($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) ? ($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) : ($this->getAttribute($context["custom_field"], "value", array())));
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" data-date-format=\"HH:mm\" id=\"input-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\" />
                    <span class=\"input-group-btn\">
                    <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                    </span></div>
                </div>
              </div>
              ";
                }
                // line 215
                echo "              ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "datetime")) {
                    // line 216
                    echo "              <div class=\"form-group custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 3);
                    echo "\">
                <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 217
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"input-group datetime\">
                    <input type=\"text\" name=\"custom_field[";
                    // line 220
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo (($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) ? ($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) : ($this->getAttribute($context["custom_field"], "value", array())));
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\" />
                    <span class=\"input-group-btn\">
                    <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                    </span></div>
                </div>
              </div>
              ";
                }
                // line 227
                echo "              ";
            }
            // line 228
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 229
        echo "              <div class=\"text-right\">
                <button type=\"button\" id=\"button-customer\" data-loading-text=\"";
        // line 230
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-arrow-right\"></i> ";
        echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
        echo "</button>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-cart\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 238
        echo (isset($context["column_product"]) ? $context["column_product"] : null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 239
        echo (isset($context["column_model"]) ? $context["column_model"] : null);
        echo "</td>
                      <!-- CIS -->
                      ";
        // line 241
        if (((isset($context["shipping_code"]) ? $context["shipping_code"] : null) == "my_parcel.my_parcel")) {
            // line 242
            echo "                      <td class=\"text-right\">Shipped Quantity</td>
                      ";
        }
        // line 244
        echo "                       <!-- CIS -->
                      <td class=\"text-right\">";
        // line 245
        echo (isset($context["column_quantity"]) ? $context["column_quantity"] : null);
        echo "</td>                      
                      <td class=\"text-right\">";
        // line 246
        echo (isset($context["column_price"]) ? $context["column_price"] : null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 247
        echo (isset($context["column_total"]) ? $context["column_total"] : null);
        echo "</td>                      
                      <td>";
        // line 248
        echo (isset($context["column_action"]) ? $context["column_action"] : null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody id=\"cart\">
                    ";
        // line 252
        if (((isset($context["order_products"]) ? $context["order_products"] : null) || (isset($context["order_vouchers"]) ? $context["order_vouchers"] : null))) {
            // line 253
            echo "                    ";
            $context["product_row"] = 0;
            // line 254
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["order_products"]) ? $context["order_products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["order_product"]) {
                // line 255
                echo "                    <tr>
                      <td class=\"text-left\">";
                // line 256
                echo $this->getAttribute($context["order_product"], "name", array());
                echo "<br />
                        <input type=\"hidden\" name=\"product[";
                // line 257
                echo (isset($context["product_row"]) ? $context["product_row"] : null);
                echo "][product_id]\" value=\"";
                echo $this->getAttribute($context["order_product"], "product_id", array());
                echo "\" />
                        ";
                // line 258
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["order_product"], "option", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 259
                    echo "                        - <small>";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo ": ";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "</small><br />
                        ";
                    // line 260
                    if (((($this->getAttribute($context["option"], "type", array()) == "select") || ($this->getAttribute($context["option"], "type", array()) == "radio")) || ($this->getAttribute($context["option"], "type", array()) == "image"))) {
                        // line 261
                        echo "                        <input type=\"hidden\" name=\"product[";
                        echo (isset($context["product_row"]) ? $context["product_row"] : null);
                        echo "][option][";
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "]\" value=\"";
                        echo $this->getAttribute($context["option"], "product_option_value_id", array());
                        echo "\" />
                        ";
                    }
                    // line 263
                    echo "                        ";
                    if (($this->getAttribute($context["option"], "type", array()) == "checkbox")) {
                        // line 264
                        echo "                        <input type=\"hidden\" name=\"product[";
                        echo (isset($context["product_row"]) ? $context["product_row"] : null);
                        echo "][option][";
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "][]\" value=\"";
                        echo $this->getAttribute($context["option"], "product_option_value_id", array());
                        echo "\" />
                        ";
                    }
                    // line 266
                    echo "                        ";
                    if ((((((($this->getAttribute($context["option"], "type", array()) == "text") || ($this->getAttribute($context["option"], "type", array()) == "textarea")) || ($this->getAttribute($context["option"], "type", array()) == "file")) || ($this->getAttribute($context["option"], "type", array()) == "date")) || ($this->getAttribute($context["option"], "type", array()) == "datetime")) || ($this->getAttribute($context["option"], "type", array()) == "time"))) {
                        // line 267
                        echo "                        <input type=\"hidden\" name=\"product[";
                        echo (isset($context["product_row"]) ? $context["product_row"] : null);
                        echo "][option][";
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "]\" value=\"";
                        echo $this->getAttribute($context["option"], "value", array());
                        echo "\" />
                        ";
                    }
                    // line 269
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "</td>
                      <td class=\"text-left\">";
                // line 270
                echo $this->getAttribute($context["order_product"], "model", array());
                echo "</td>
                      <!-- CIS -->
                      ";
                // line 272
                if (((isset($context["shipping_code"]) ? $context["shipping_code"] : null) == "my_parcel.my_parcel")) {
                    // line 273
                    echo "                      <td class=\"text-left\"><input type=\"text\" name=\"product[";
                    echo (isset($context["product_row"]) ? $context["product_row"] : null);
                    echo "][squantity]\" value=\"";
                    echo $this->getAttribute($context["order_product"], "squantity", array());
                    echo "\"/>
                      <input type=\"hidden\" name=\"product[";
                    // line 274
                    echo (isset($context["product_row"]) ? $context["product_row"] : null);
                    echo "][squantity1]\" value=\"";
                    echo $this->getAttribute($context["order_product"], "squantity", array());
                    echo "\"/>
                      </td>
                      ";
                }
                // line 277
                echo "                      <!-- CIS -->
                      <td class=\"text-right\">";
                // line 278
                echo $this->getAttribute($context["order_product"], "quantity", array());
                echo "
                        <input type=\"hidden\" name=\"product[";
                // line 279
                echo (isset($context["product_row"]) ? $context["product_row"] : null);
                echo "][quantity]\" value=\"";
                echo $this->getAttribute($context["order_product"], "quantity", array());
                echo "\" /></td>                      
                      <td class=\"text-right\"></td>
                      <td class=\"text-right\"></td>
                      <td class=\"text-center\"></td>
                    </tr>
                    ";
                // line 284
                $context["product_row"] = ((isset($context["product_row"]) ? $context["product_row"] : null) + 1);
                // line 285
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 286
            echo "                    ";
            $context["voucher_row"] = 0;
            // line 287
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["order_vouchers"]) ? $context["order_vouchers"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["order_voucher"]) {
                // line 288
                echo "                    <tr>
                      <td class=\"text-left\">";
                // line 289
                echo $this->getAttribute($context["order_voucher"], "description", array());
                echo "
                        <input type=\"hidden\" name=\"voucher[";
                // line 290
                echo (isset($context["voucher_row"]) ? $context["voucher_row"] : null);
                echo "][voucher_id]\" value=\"";
                echo $this->getAttribute($context["order_voucher"], "voucher_id", array());
                echo "\" />
                        <input type=\"hidden\" name=\"voucher[";
                // line 291
                echo (isset($context["voucher_row"]) ? $context["voucher_row"] : null);
                echo "][description]\" value=\"";
                echo $this->getAttribute($context["order_voucher"], "description", array());
                echo "\" />
                        <input type=\"hidden\" name=\"voucher[";
                // line 292
                echo (isset($context["voucher_row"]) ? $context["voucher_row"] : null);
                echo "][code]\" value=\"";
                echo $this->getAttribute($context["order_voucher"], "code", array());
                echo "\" />
                        <input type=\"hidden\" name=\"voucher[";
                // line 293
                echo (isset($context["voucher_row"]) ? $context["voucher_row"] : null);
                echo "][from_name]\" value=\"";
                echo $this->getAttribute($context["order_voucher"], "from_name", array());
                echo "\" />
                        <input type=\"hidden\" name=\"voucher[";
                // line 294
                echo (isset($context["voucher_row"]) ? $context["voucher_row"] : null);
                echo "][from_email]\" value=\"";
                echo $this->getAttribute($context["order_voucher"], "from_email", array());
                echo "\" />
                        <input type=\"hidden\" name=\"voucher[";
                // line 295
                echo (isset($context["voucher_row"]) ? $context["voucher_row"] : null);
                echo "][to_name]\" value=\"";
                echo $this->getAttribute($context["order_voucher"], "to_name", array());
                echo "\" />
                        <input type=\"hidden\" name=\"voucher[";
                // line 296
                echo (isset($context["voucher_row"]) ? $context["voucher_row"] : null);
                echo "][to_email]\" value=\"";
                echo $this->getAttribute($context["order_voucher"], "to_email", array());
                echo "\" />
                        <input type=\"hidden\" name=\"voucher[";
                // line 297
                echo (isset($context["voucher_row"]) ? $context["voucher_row"] : null);
                echo "][voucher_theme_id]\" value=\"";
                echo $this->getAttribute($context["order_voucher"], "voucher_theme_id", array());
                echo "\" />
                        <input type=\"hidden\" name=\"voucher[";
                // line 298
                echo (isset($context["voucher_row"]) ? $context["voucher_row"] : null);
                echo "][message]\" value=\"";
                echo $this->getAttribute($context["order_voucher"], "message", array());
                echo "\" />
                        <input type=\"hidden\" name=\"voucher[";
                // line 299
                echo (isset($context["voucher_row"]) ? $context["voucher_row"] : null);
                echo "][amount]\" value=\"";
                echo $this->getAttribute($context["order_voucher"], "amount", array());
                echo "\" /></td>
                      <td class=\"text-left\"></td>
                      <td class=\"text-right\">1</td>
                      <td class=\"text-right\"></td>
                      <td class=\"text-right\"></td>
                      <td class=\"text-center\"></td>
                    </tr>
                    ";
                // line 306
                $context["voucher_row"] = ((isset($context["voucher_row"]) ? $context["voucher_row"] : null) + 1);
                // line 307
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 308
            echo "                    ";
        } else {
            // line 309
            echo "                    <tr>
                      <td class=\"text-center\" colspan=\"6\">";
            // line 310
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo "</td>
                    </tr>
                  </tbody>
                  ";
        }
        // line 314
        echo "                </table>
              </div>
              <ul class=\"nav nav-tabs nav-justified\">
                <li class=\"active\"><a href=\"#tab-product\" data-toggle=\"tab\">";
        // line 317
        echo (isset($context["tab_product"]) ? $context["tab_product"] : null);
        echo "</a></li>
                <li><a href=\"#tab-voucher\" data-toggle=\"tab\">";
        // line 318
        echo (isset($context["tab_voucher"]) ? $context["tab_voucher"] : null);
        echo "</a></li>
              </ul>
              <div class=\"tab-content\">
                <div class=\"tab-pane active\" id=\"tab-product\">
                  <fieldset>
                    <legend>";
        // line 323
        echo (isset($context["text_product"]) ? $context["text_product"] : null);
        echo "</legend>
                    <div class=\"form-group\">
                      <label class=\"col-sm-2 control-label\" for=\"input-product\">";
        // line 325
        echo (isset($context["entry_product"]) ? $context["entry_product"] : null);
        echo "</label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"product\" value=\"\" id=\"input-product\" class=\"form-control\" />
                        <input type=\"hidden\" name=\"product_id\" value=\"\" />
                      </div>
                    </div>
                    <div class=\"form-group\">
                      <label class=\"col-sm-2 control-label\" for=\"input-quantity\">";
        // line 332
        echo (isset($context["entry_quantity"]) ? $context["entry_quantity"] : null);
        echo "</label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"quantity\" value=\"1\" id=\"input-quantity\" class=\"form-control\" />
                      </div>
                    </div>
                    <div id=\"option\"></div>
                  </fieldset>
                  <div class=\"text-right\">
                    <button type=\"button\" id=\"button-product-add\" data-loading-text=\"";
        // line 340
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i> ";
        echo (isset($context["button_product_add"]) ? $context["button_product_add"] : null);
        echo "</button>
                  </div>
                </div>
                <div class=\"tab-pane\" id=\"tab-voucher\">
                  <fieldset>
                    <legend>";
        // line 345
        echo (isset($context["text_voucher"]) ? $context["text_voucher"] : null);
        echo "</legend>
                    <div class=\"form-group required\">
                      <label class=\"col-sm-2 control-label\" for=\"input-to-name\">";
        // line 347
        echo (isset($context["entry_to_name"]) ? $context["entry_to_name"] : null);
        echo "</label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"to_name\" value=\"\" id=\"input-to-name\" class=\"form-control\" />
                      </div>
                    </div>
                    <div class=\"form-group required\">
                      <label class=\"col-sm-2 control-label\" for=\"input-to-email\">";
        // line 353
        echo (isset($context["entry_to_email"]) ? $context["entry_to_email"] : null);
        echo "</label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"to_email\" value=\"\" id=\"input-to-email\" class=\"form-control\" />
                      </div>
                    </div>
                    <div class=\"form-group required\">
                      <label class=\"col-sm-2 control-label\" for=\"input-from-name\">";
        // line 359
        echo (isset($context["entry_from_name"]) ? $context["entry_from_name"] : null);
        echo "</label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"from_name\" value=\"\" id=\"input-from-name\" class=\"form-control\" />
                      </div>
                    </div>
                    <div class=\"form-group required\">
                      <label class=\"col-sm-2 control-label\" for=\"input-from-email\">";
        // line 365
        echo (isset($context["entry_from_email"]) ? $context["entry_from_email"] : null);
        echo "</label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"from_email\" value=\"\" id=\"input-from-email\" class=\"form-control\" />
                      </div>
                    </div>
                    <div class=\"form-group required\">
                      <label class=\"col-sm-2 control-label\" for=\"input-theme\">";
        // line 371
        echo (isset($context["entry_theme"]) ? $context["entry_theme"] : null);
        echo "</label>
                      <div class=\"col-sm-10\">
                        <select name=\"voucher_theme_id\" id=\"input-theme\" class=\"form-control\">
                          ";
        // line 374
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["voucher_themes"]) ? $context["voucher_themes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher_theme"]) {
            // line 375
            echo "                          <option value=\"";
            echo $this->getAttribute($context["voucher_theme"], "voucher_theme_id", array());
            echo "\">";
            echo $this->getAttribute($context["voucher_theme"], "name", array());
            echo "</option>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher_theme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 377
        echo "                        </select>
                      </div>
                    </div>
                    <div class=\"form-group\">
                      <label class=\"col-sm-2 control-label\" for=\"input-message\">";
        // line 381
        echo (isset($context["entry_message"]) ? $context["entry_message"] : null);
        echo "</label>
                      <div class=\"col-sm-10\">
                        <textarea name=\"message\" rows=\"5\" id=\"input-message\" class=\"form-control\"></textarea>
                      </div>
                    </div>
                    <div class=\"form-group required\">
                      <label class=\"col-sm-2 control-label\" for=\"input-amount\">";
        // line 387
        echo (isset($context["entry_amount"]) ? $context["entry_amount"] : null);
        echo "</label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"amount\" value=\"";
        // line 389
        echo (isset($context["voucher_min"]) ? $context["voucher_min"] : null);
        echo "\" id=\"input-amount\" class=\"form-control\" />
                      </div>
                    </div>
                  </fieldset>
                  <div class=\"text-right\">
                    <button type=\"button\" id=\"button-voucher-add\" data-loading-text=\"";
        // line 394
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i> ";
        echo (isset($context["button_voucher_add"]) ? $context["button_voucher_add"] : null);
        echo "</button>
                  </div>
                </div>
              </div>
              <br />
              <div class=\"row\">
                <div class=\"col-sm-6 text-left\">
                  <button type=\"button\" onclick=\"\$('a[href=\\'#tab-customer\\']').tab('show');\" class=\"btn btn-default\"><i class=\"fa fa-arrow-left\"></i> ";
        // line 401
        echo (isset($context["button_back"]) ? $context["button_back"] : null);
        echo "</button>
                </div>
                <div class=\"col-sm-6 text-right\">
                  <button type=\"button\" id=\"button-cart\" class=\"btn btn-primary\"><i class=\"fa fa-arrow-right\"></i> ";
        // line 404
        echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
        echo "</button>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-payment\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-payment-address\">";
        // line 410
        echo (isset($context["entry_address"]) ? $context["entry_address"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_address\" id=\"input-payment-address\" class=\"form-control\">
                    <option value=\"0\" selected=\"selected\">";
        // line 413
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>
                    ";
        // line 414
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["addresses"]) ? $context["addresses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
            // line 415
            echo "                    <option value=\"";
            echo $this->getAttribute($context["address"], "address_id", array());
            echo "\">";
            echo $this->getAttribute($context["address"], "firstname", array());
            echo " ";
            echo $this->getAttribute($context["address"], "lastname", array());
            echo ", ";
            echo $this->getAttribute($context["address"], "address_1", array());
            echo ", ";
            echo $this->getAttribute($context["address"], "city", array());
            echo ", ";
            echo $this->getAttribute($context["address"], "country", array());
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 417
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-payment-firstname\">";
        // line 421
        echo (isset($context["entry_firstname"]) ? $context["entry_firstname"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"firstname\" value=\"";
        // line 423
        echo (isset($context["payment_firstname"]) ? $context["payment_firstname"] : null);
        echo "\" id=\"input-payment-firstname\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-payment-lastname\">";
        // line 427
        echo (isset($context["entry_lastname"]) ? $context["entry_lastname"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"lastname\" value=\"";
        // line 429
        echo (isset($context["payment_lastname"]) ? $context["payment_lastname"] : null);
        echo "\" id=\"input-payment-lastname\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-payment-company\">";
        // line 433
        echo (isset($context["entry_company"]) ? $context["entry_company"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"company\" value=\"";
        // line 435
        echo (isset($context["payment_company"]) ? $context["payment_company"] : null);
        echo "\" id=\"input-payment-company\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-payment-address-1\">";
        // line 439
        echo (isset($context["entry_address_1"]) ? $context["entry_address_1"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"address_1\" value=\"";
        // line 441
        echo (isset($context["payment_address_1"]) ? $context["payment_address_1"] : null);
        echo "\" id=\"input-payment-address-1\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-payment-address-2\">";
        // line 445
        echo (isset($context["entry_address_2"]) ? $context["entry_address_2"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"address_2\" value=\"";
        // line 447
        echo (isset($context["payment_address_2"]) ? $context["payment_address_2"] : null);
        echo "\" id=\"input-payment-address-2\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-payment-city\">";
        // line 451
        echo (isset($context["entry_city"]) ? $context["entry_city"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"city\" value=\"";
        // line 453
        echo (isset($context["payment_city"]) ? $context["payment_city"] : null);
        echo "\" id=\"input-payment-city\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-payment-postcode\">";
        // line 457
        echo (isset($context["entry_postcode"]) ? $context["entry_postcode"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"postcode\" value=\"";
        // line 459
        echo (isset($context["payment_postcode"]) ? $context["payment_postcode"] : null);
        echo "\" id=\"input-payment-postcode\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-payment-country\">";
        // line 463
        echo (isset($context["entry_country"]) ? $context["entry_country"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"country_id\" id=\"input-payment-country\" class=\"form-control\">
                    <option value=\"\">";
        // line 466
        echo (isset($context["text_select"]) ? $context["text_select"] : null);
        echo "</option>
                    ";
        // line 467
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["countries"]) ? $context["countries"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 468
            echo "                    ";
            if (($this->getAttribute($context["country"], "country_id", array()) == (isset($context["payment_country_id"]) ? $context["payment_country_id"] : null))) {
                // line 469
                echo "                    <option value=\"";
                echo $this->getAttribute($context["country"], "country_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["country"], "name", array());
                echo "</option>
                    ";
            } else {
                // line 471
                echo "                    <option value=\"";
                echo $this->getAttribute($context["country"], "country_id", array());
                echo "\">";
                echo $this->getAttribute($context["country"], "name", array());
                echo "</option>
                    ";
            }
            // line 473
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 474
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-payment-zone\">";
        // line 478
        echo (isset($context["entry_zone"]) ? $context["entry_zone"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"zone_id\" id=\"input-payment-zone\" class=\"form-control\">
                  </select>
                </div>
              </div>
              ";
        // line 484
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["custom_fields"]) ? $context["custom_fields"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 485
            echo "              ";
            if (($this->getAttribute($context["custom_field"], "location", array()) == "address")) {
                // line 486
                echo "              ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "select")) {
                    // line 487
                    echo "              <div class=\"form-group custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 3);
                    echo "\">
                <label class=\"col-sm-2 control-label\" for=\"input-payment-custom-field";
                    // line 488
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"custom_field[";
                    // line 490
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" id=\"input-payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\">
                    <option value=\"\">";
                    // line 491
                    echo (isset($context["text_select"]) ? $context["text_select"] : null);
                    echo "</option>
                    ";
                    // line 492
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 493
                        echo "                    ";
                        if (($this->getAttribute((isset($context["payment_custom_field"]) ? $context["payment_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && ($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()) == $this->getAttribute((isset($context["payment_custom_field"]) ? $context["payment_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                            // line 494
                            echo "                    <option value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" selected=\"selected\">";
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</option>
                    ";
                        } else {
                            // line 496
                            echo "                    <option value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\">";
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</option>
                    ";
                        }
                        // line 498
                        echo "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 499
                    echo "                  </select>
                </div>
              </div>
              ";
                }
                // line 503
                echo "              ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "radio")) {
                    // line 504
                    echo "              <div class=\"form-group custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 3);
                    echo "\">
                <label class=\"col-sm-2 control-label\">";
                    // line 505
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
                <div class=\"col-sm-10\">
                  <div id=\"input-payment-custom-field";
                    // line 507
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">
                    ";
                    // line 508
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 509
                        echo "                    <div class=\"radio\">
                      ";
                        // line 510
                        if (($this->getAttribute((isset($context["payment_custom_field"]) ? $context["payment_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && ($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()) == $this->getAttribute((isset($context["payment_custom_field"]) ? $context["payment_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                            // line 511
                            echo "                      <label>
                        <input type=\"radio\" name=\"custom_field[";
                            // line 512
                            echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                            echo "]\" value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" checked=\"checked\" />
                        ";
                            // line 513
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</label>
                      ";
                        } else {
                            // line 515
                            echo "                      <label>
                        <input type=\"radio\" name=\"custom_field[";
                            // line 516
                            echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                            echo "]\" value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" />
                        ";
                            // line 517
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</label>
                      ";
                        }
                        // line 519
                        echo "                    </div>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 521
                    echo "                  </div>
                </div>
              </div>
              ";
                }
                // line 525
                echo "              ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "checkbox")) {
                    // line 526
                    echo "              <div class=\"form-group custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 3);
                    echo "\">
                <label class=\"col-sm-2 control-label\">";
                    // line 527
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
                <div class=\"col-sm-10\">
                  <div id=\"input-payment-custom-field";
                    // line 529
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">
                    ";
                    // line 530
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 531
                        echo "                    <div class=\"checkbox\">
                      ";
                        // line 532
                        if (($this->getAttribute((isset($context["payment_custom_field"]) ? $context["payment_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && twig_in_filter($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()), $this->getAttribute((isset($context["payment_custom_field"]) ? $context["payment_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                            // line 533
                            echo "                      <label>
                        <input type=\"checkbox\" name=\"custom_field[";
                            // line 534
                            echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                            echo "][]\" value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" checked=\"checked\" />
                        ";
                            // line 535
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</label>
                      ";
                        } else {
                            // line 537
                            echo "                      <label>
                        <input type=\"checkbox\" name=\"custom_field[";
                            // line 538
                            echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                            echo "][]\" value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" />
                        ";
                            // line 539
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</label>
                      ";
                        }
                        // line 541
                        echo "                    </div>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 543
                    echo "                  </div>
                </div>
              </div>
              ";
                }
                // line 547
                echo "              ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "text")) {
                    // line 548
                    echo "              <div class=\"form-group custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 3);
                    echo "\">
                <label class=\"col-sm-2 control-label\" for=\"input-payment-custom-field";
                    // line 549
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"custom_field[";
                    // line 551
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo (($this->getAttribute((isset($context["payment_custom_field"]) ? $context["payment_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) ? ($this->getAttribute((isset($context["payment_custom_field"]) ? $context["payment_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) : ($this->getAttribute($context["custom_field"], "value", array())));
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" id=\"input-payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\" />
                </div>
              </div>
              ";
                }
                // line 555
                echo "              ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "textarea")) {
                    // line 556
                    echo "              <div class=\"form-group custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 3);
                    echo "\">
                <label class=\"col-sm-2 control-label\" for=\"input-payment-custom-field";
                    // line 557
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"custom_field[";
                    // line 559
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" id=\"input-payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\">";
                    echo (($this->getAttribute((isset($context["payment_custom_field"]) ? $context["payment_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) ? ($this->getAttribute((isset($context["payment_custom_field"]) ? $context["payment_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) : ($this->getAttribute($context["custom_field"], "value", array())));
                    echo "</textarea>
                </div>
              </div>
              ";
                }
                // line 563
                echo "              ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "file")) {
                    // line 564
                    echo "              <div class=\"form-group custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 3);
                    echo "\">
                <label class=\"col-sm-2 control-label\">";
                    // line 565
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
                <div class=\"col-sm-10\">
                  <button type=\"button\" id=\"button-payment-custom-field";
                    // line 567
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-loading-text=\"";
                    echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                    echo "\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> ";
                    echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
                    echo "</button>
                  <input type=\"hidden\" name=\"custom_field[";
                    // line 568
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo (($this->getAttribute((isset($context["payment_custom_field"]) ? $context["payment_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) ? ($this->getAttribute((isset($context["payment_custom_field"]) ? $context["payment_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) : (""));
                    echo "\" id=\"input-payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" />
                </div>
              </div>
              ";
                }
                // line 572
                echo "              ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "date")) {
                    // line 573
                    echo "              <div class=\"form-group custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 3);
                    echo "\">
                <label class=\"col-sm-2 control-label\" for=\"input-payment-custom-field";
                    // line 574
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"input-group date\">
                    <input type=\"text\" name=\"custom_field[";
                    // line 577
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo (($this->getAttribute((isset($context["payment_custom_field"]) ? $context["payment_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) ? ($this->getAttribute((isset($context["payment_custom_field"]) ? $context["payment_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) : ($this->getAttribute($context["custom_field"], "value", array())));
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\" />
                    <span class=\"input-group-btn\">
                    <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                    </span></div>
                </div>
              </div>
              ";
                }
                // line 584
                echo "              ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "time")) {
                    // line 585
                    echo "              <div class=\"form-group custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 3);
                    echo "\">
                <label class=\"col-sm-2 control-label\" for=\"input-payment-custom-field";
                    // line 586
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"input-group time\">
                    <input type=\"text\" name=\"custom_field[";
                    // line 589
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo (($this->getAttribute((isset($context["payment_custom_field"]) ? $context["payment_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) ? ($this->getAttribute((isset($context["payment_custom_field"]) ? $context["payment_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) : ($this->getAttribute($context["custom_field"], "value", array())));
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" data-date-format=\"HH:mm\" id=\"input-payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\" />
                    <span class=\"input-group-btn\">
                    <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                    </span></div>
                </div>
              </div>
              ";
                }
                // line 596
                echo "              ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "datetime")) {
                    // line 597
                    echo "              <div class=\"form-group custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 3);
                    echo "\">
                <label class=\"col-sm-2 control-label\" for=\"input-payment-custom-field";
                    // line 598
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"input-group datetime\">
                    <input type=\"text\" name=\"custom_field[";
                    // line 601
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo (($this->getAttribute((isset($context["payment_custom_field"]) ? $context["payment_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) ? ($this->getAttribute((isset($context["payment_custom_field"]) ? $context["payment_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) : ($this->getAttribute($context["custom_field"], "value", array())));
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\" />
                    <span class=\"input-group-btn\">
                    <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                    </span></div>
                </div>
              </div>
              ";
                }
                // line 608
                echo "              ";
            }
            // line 609
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 610
        echo "              <div class=\"row\">
                <div class=\"col-sm-6 text-left\">
                  <button type=\"button\" onclick=\"\$('a[href=\\'#tab-cart\\']').tab('show');\" class=\"btn btn-default\"><i class=\"fa fa-arrow-left\"></i> ";
        // line 612
        echo (isset($context["button_back"]) ? $context["button_back"] : null);
        echo "</button>
                </div>
                <div class=\"col-sm-6 text-right\">
                  <button type=\"button\" id=\"button-payment-address\" data-loading-text=\"";
        // line 615
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-arrow-right\"></i> ";
        echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
        echo "</button>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-shipping\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-shipping-address\">";
        // line 621
        echo (isset($context["entry_address"]) ? $context["entry_address"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"shipping_address\" id=\"input-shipping-address\" class=\"form-control\">
                    <option value=\"0\" selected=\"selected\">";
        // line 624
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>
                    ";
        // line 625
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["addresses"]) ? $context["addresses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
            // line 626
            echo "                    <option value=\"";
            echo $this->getAttribute($context["address"], "address_id", array());
            echo "\">";
            echo $this->getAttribute($context["address"], "firstname", array());
            echo " ";
            echo $this->getAttribute($context["address"], "lastname", array());
            echo ", ";
            echo $this->getAttribute($context["address"], "address_1", array());
            echo ", ";
            echo $this->getAttribute($context["address"], "city", array());
            echo ", ";
            echo $this->getAttribute($context["address"], "country", array());
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 628
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-shipping-firstname\">";
        // line 632
        echo (isset($context["entry_firstname"]) ? $context["entry_firstname"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"firstname\" value=\"";
        // line 634
        echo (isset($context["shipping_firstname"]) ? $context["shipping_firstname"] : null);
        echo "\" id=\"input-shipping-firstname\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-shipping-lastname\">";
        // line 638
        echo (isset($context["entry_lastname"]) ? $context["entry_lastname"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"lastname\" value=\"";
        // line 640
        echo (isset($context["shipping_lastname"]) ? $context["shipping_lastname"] : null);
        echo "\" id=\"input-shipping-lastname\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-shipping-company\">";
        // line 644
        echo (isset($context["entry_company"]) ? $context["entry_company"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"company\" value=\"";
        // line 646
        echo (isset($context["shipping_company"]) ? $context["shipping_company"] : null);
        echo "\" id=\"input-shipping-company\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-shipping-address-1\">";
        // line 650
        echo (isset($context["entry_address_1"]) ? $context["entry_address_1"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"address_1\" value=\"";
        // line 652
        echo (isset($context["shipping_address_1"]) ? $context["shipping_address_1"] : null);
        echo "\" id=\"input-shipping-address-1\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-shipping-address-2\">";
        // line 656
        echo (isset($context["entry_address_2"]) ? $context["entry_address_2"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"address_2\" value=\"";
        // line 658
        echo (isset($context["shipping_address_2"]) ? $context["shipping_address_2"] : null);
        echo "\" id=\"input-shipping-address-2\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-shipping-city\">";
        // line 662
        echo (isset($context["entry_city"]) ? $context["entry_city"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"city\" value=\"";
        // line 664
        echo (isset($context["shipping_city"]) ? $context["shipping_city"] : null);
        echo "\" id=\"input-shipping-city\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-shipping-postcode\">";
        // line 668
        echo (isset($context["entry_postcode"]) ? $context["entry_postcode"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"postcode\" value=\"";
        // line 670
        echo (isset($context["shipping_postcode"]) ? $context["shipping_postcode"] : null);
        echo "\" id=\"input-shipping-postcode\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-shipping-country\">";
        // line 674
        echo (isset($context["entry_country"]) ? $context["entry_country"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"country_id\" id=\"input-shipping-country\" class=\"form-control\">
                    <option value=\"\">";
        // line 677
        echo (isset($context["text_select"]) ? $context["text_select"] : null);
        echo "</option>
                    ";
        // line 678
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["countries"]) ? $context["countries"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 679
            echo "                    ";
            if (($this->getAttribute($context["country"], "country_id", array()) == (isset($context["shipping_country_id"]) ? $context["shipping_country_id"] : null))) {
                // line 680
                echo "                    <option value=\"";
                echo $this->getAttribute($context["country"], "country_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["country"], "name", array());
                echo "</option>
                    ";
            } else {
                // line 682
                echo "                    <option value=\"";
                echo $this->getAttribute($context["country"], "country_id", array());
                echo "\">";
                echo $this->getAttribute($context["country"], "name", array());
                echo "</option>
                    ";
            }
            // line 684
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 685
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-shipping-zone\">";
        // line 689
        echo (isset($context["entry_zone"]) ? $context["entry_zone"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"zone_id\" id=\"input-shipping-zone\" class=\"form-control\">
                  </select>
                </div>
              </div>
              ";
        // line 695
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["custom_fields"]) ? $context["custom_fields"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 696
            echo "              ";
            if (($this->getAttribute($context["custom_field"], "location", array()) == "address")) {
                // line 697
                echo "              ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "select")) {
                    // line 698
                    echo "              <div class=\"form-group custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 3);
                    echo "\">
                <label class=\"col-sm-2 control-label\" for=\"input-shipping-custom-field";
                    // line 699
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"custom_field[";
                    // line 701
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" id=\"input-shipping-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\">
                    <option value=\"\">";
                    // line 702
                    echo (isset($context["text_select"]) ? $context["text_select"] : null);
                    echo "</option>
                    ";
                    // line 703
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 704
                        echo "                    ";
                        if (($this->getAttribute((isset($context["shipping_custom_field"]) ? $context["shipping_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && ($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()) == $this->getAttribute((isset($context["shipping_custom_field"]) ? $context["shipping_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                            // line 705
                            echo "                    <option value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" selected=\"selected\">";
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</option>
                    ";
                        } else {
                            // line 707
                            echo "                    <option value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\">";
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</option>
                    ";
                        }
                        // line 709
                        echo "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 710
                    echo "                  </select>
                </div>
              </div>
              ";
                }
                // line 714
                echo "              ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "radio")) {
                    // line 715
                    echo "              <div class=\"form-group custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 3);
                    echo "\">
                <label class=\"col-sm-2 control-label\">";
                    // line 716
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
                <div class=\"col-sm-10\">
                  <div id=\"input-shipping-custom-field";
                    // line 718
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">
                    ";
                    // line 719
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 720
                        echo "                    <div class=\"radio\">
                      ";
                        // line 721
                        if (($this->getAttribute((isset($context["shipping_custom_field"]) ? $context["shipping_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && ($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()) == $this->getAttribute((isset($context["shipping_custom_field"]) ? $context["shipping_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                            // line 722
                            echo "                      <label>
                        <input type=\"radio\" name=\"custom_field[";
                            // line 723
                            echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                            echo "]\" value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" checked=\"checked\" />
                        ";
                            // line 724
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</label>
                      ";
                        } else {
                            // line 726
                            echo "                      <label>
                        <input type=\"radio\" name=\"custom_field[";
                            // line 727
                            echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                            echo "]\" value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" />
                        ";
                            // line 728
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</label>
                      ";
                        }
                        // line 730
                        echo "                    </div>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 732
                    echo "                  </div>
                </div>
              </div>
              ";
                }
                // line 736
                echo "              ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "checkbox")) {
                    // line 737
                    echo "              <div class=\"form-group custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 3);
                    echo "\">
                <label class=\"col-sm-2 control-label\">";
                    // line 738
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
                <div class=\"col-sm-10\">
                  <div id=\"input-shipping-custom-field";
                    // line 740
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">
                    ";
                    // line 741
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 742
                        echo "                    <div class=\"checkbox\">
                      ";
                        // line 743
                        if (($this->getAttribute((isset($context["shipping_custom_field"]) ? $context["shipping_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && twig_in_filter($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()), $this->getAttribute((isset($context["shipping_custom_field"]) ? $context["shipping_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                            // line 744
                            echo "                      <label>
                        <input type=\"checkbox\" name=\"custom_field[";
                            // line 745
                            echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                            echo "][]\" value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" checked=\"checked\" />
                        ";
                            // line 746
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</label>
                      ";
                        } else {
                            // line 748
                            echo "                      <label>
                        <input type=\"checkbox\" name=\"custom_field[";
                            // line 749
                            echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                            echo "][]\" value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" />
                        ";
                            // line 750
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</label>
                      ";
                        }
                        // line 752
                        echo "                    </div>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 754
                    echo "                  </div>
                </div>
              </div>
              ";
                }
                // line 758
                echo "              ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "text")) {
                    // line 759
                    echo "              <div class=\"form-group custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 3);
                    echo "\">
                <label class=\"col-sm-2 control-label\" for=\"input-shipping-custom-field";
                    // line 760
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"custom_field[";
                    // line 762
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo (($this->getAttribute((isset($context["shipping_custom_field"]) ? $context["shipping_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) ? ((($this->getAttribute((isset($context["shipping_custom_field"]) ? $context["shipping_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) ? ($this->getAttribute($context["custom_field"], "value", array())) : (""))) : (""));
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" id=\"input-shipping-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\" />
                </div>
              </div>
              ";
                }
                // line 766
                echo "              ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "textarea")) {
                    // line 767
                    echo "              <div class=\"form-group custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 3);
                    echo "\">
                <label class=\"col-sm-2 control-label\" for=\"input-shipping-custom-field";
                    // line 768
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"custom_field[";
                    // line 770
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" id=\"input-shipping-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\">";
                    echo (($this->getAttribute((isset($context["shipping_custom_field"]) ? $context["shipping_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) ? ($this->getAttribute((isset($context["shipping_custom_field"]) ? $context["shipping_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) : ($this->getAttribute($context["custom_field"], "value", array())));
                    echo "</textarea>
                </div>
              </div>
              ";
                }
                // line 774
                echo "              ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "file")) {
                    // line 775
                    echo "              <div class=\"form-group custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 3);
                    echo "\">
                <label class=\"col-sm-2 control-label\">";
                    // line 776
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
                <div class=\"col-sm-10\">
                  <button type=\"button\" id=\"button-shipping-custom-field";
                    // line 778
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-loading-text=\"";
                    echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                    echo "\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> ";
                    echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
                    echo "</button>
                  <input type=\"hidden\" name=\"custom_field[";
                    // line 779
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo (($this->getAttribute((isset($context["shipping_custom_field"]) ? $context["shipping_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) ? ($this->getAttribute((isset($context["shipping_custom_field"]) ? $context["shipping_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) : (""));
                    echo "\" id=\"input-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" />
                </div>
              </div>
              ";
                }
                // line 783
                echo "              ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "date")) {
                    // line 784
                    echo "              <div class=\"form-group custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 3);
                    echo "\">
                <label class=\"col-sm-2 control-label\" for=\"input-shipping-custom-field";
                    // line 785
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"input-group date\">
                    <input type=\"text\" name=\"custom_field[";
                    // line 788
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo (($this->getAttribute((isset($context["shipping_custom_field"]) ? $context["shipping_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) ? ($this->getAttribute((isset($context["shipping_custom_field"]) ? $context["shipping_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) : ($this->getAttribute($context["custom_field"], "value", array())));
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-shipping-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\" />
                    <span class=\"input-group-btn\">
                    <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                    </span></div>
                </div>
              </div>
              ";
                }
                // line 795
                echo "              ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "time")) {
                    // line 796
                    echo "              <div class=\"form-group custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 3);
                    echo "\">
                <label class=\"col-sm-2 control-label\" for=\"input-shipping-custom-field";
                    // line 797
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"input-group time\">
                    <input type=\"text\" name=\"custom_field[";
                    // line 800
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo (($this->getAttribute((isset($context["shipping_custom_field"]) ? $context["shipping_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) ? ($this->getAttribute((isset($context["shipping_custom_field"]) ? $context["shipping_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) : ($this->getAttribute($context["custom_field"], "value", array())));
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" data-date-format=\"HH:mm\" id=\"input-shipping-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\" />
                    <span class=\"input-group-btn\">
                    <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                    </span></div>
                </div>
              </div>
              ";
                }
                // line 807
                echo "              ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "datetime")) {
                    // line 808
                    echo "              <div class=\"form-group custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 3);
                    echo "\">
                <label class=\"col-sm-2 control-label\" for=\"input-shipping-custom-field";
                    // line 809
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"input-group datetime\">
                    <input type=\"text\" name=\"custom_field[";
                    // line 812
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo (($this->getAttribute((isset($context["shipping_custom_field"]) ? $context["shipping_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) ? ($this->getAttribute((isset($context["shipping_custom_field"]) ? $context["shipping_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) : ($this->getAttribute($context["custom_field"], "value", array())));
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-shipping-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\" />
                    <span class=\"input-group-btn\">
                    <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                    </span></div>
                </div>
              </div>
              ";
                }
                // line 819
                echo "              ";
            }
            // line 820
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 821
        echo "              <div class=\"row\">
                <div class=\"col-sm-6 text-left\">
                  <button type=\"button\" onclick=\"\$('a[href=\\'#tab-payment\\']').tab('show');\" class=\"btn btn-default\"><i class=\"fa fa-arrow-left\"></i> ";
        // line 823
        echo (isset($context["button_back"]) ? $context["button_back"] : null);
        echo "</button>
                </div>
                <div class=\"col-sm-6 text-right\">
                  <button type=\"button\" id=\"button-shipping-address\" data-loading-text=\"";
        // line 826
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-arrow-right\"></i> ";
        echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
        echo "</button>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-total\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 835
        echo (isset($context["column_product"]) ? $context["column_product"] : null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 836
        echo (isset($context["column_model"]) ? $context["column_model"] : null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 837
        echo (isset($context["column_quantity"]) ? $context["column_quantity"] : null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 838
        echo (isset($context["column_price"]) ? $context["column_price"] : null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 839
        echo (isset($context["column_total"]) ? $context["column_total"] : null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody id=\"total\">
                    <tr>
                      <td class=\"text-center\" colspan=\"5\">";
        // line 844
        echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
        echo "</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <fieldset>
                <legend>";
        // line 850
        echo (isset($context["text_order_detail"]) ? $context["text_order_detail"] : null);
        echo "</legend>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-shipping-method\">";
        // line 852
        echo (isset($context["entry_shipping_method"]) ? $context["entry_shipping_method"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <select name=\"shipping_method\" id=\"input-shipping-method\" class=\"form-control\">
                        <option value=\"\">";
        // line 856
        echo (isset($context["text_select"]) ? $context["text_select"] : null);
        echo "</option>
                        ";
        // line 857
        if ((isset($context["shipping_code"]) ? $context["shipping_code"] : null)) {
            // line 858
            echo "                        <option value=\"";
            echo (isset($context["shipping_code"]) ? $context["shipping_code"] : null);
            echo "\" selected=\"selected\">";
            echo (isset($context["shipping_method"]) ? $context["shipping_method"] : null);
            echo "</option>
                        ";
        }
        // line 860
        echo "                      </select>
                      <span class=\"input-group-btn\">
                      <button type=\"button\" id=\"button-shipping-method\" data-loading-text=\"";
        // line 862
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" class=\"btn btn-primary\">";
        echo (isset($context["button_apply"]) ? $context["button_apply"] : null);
        echo "</button>
                      </span></div>
                  </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-payment-method\">";
        // line 867
        echo (isset($context["entry_payment_method"]) ? $context["entry_payment_method"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <select name=\"payment_method\" id=\"input-payment-method\" class=\"form-control\">
                        <option value=\"\">";
        // line 871
        echo (isset($context["text_select"]) ? $context["text_select"] : null);
        echo "</option>
                        ";
        // line 872
        if ((isset($context["payment_code"]) ? $context["payment_code"] : null)) {
            // line 873
            echo "                        <option value=\"";
            echo (isset($context["payment_code"]) ? $context["payment_code"] : null);
            echo "\" selected=\"selected\">";
            echo (isset($context["payment_method"]) ? $context["payment_method"] : null);
            echo "</option>
                        ";
        }
        // line 875
        echo "                      </select>
                      <span class=\"input-group-btn\">
                      <button type=\"button\" id=\"button-payment-method\" data-loading-text=\"";
        // line 877
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" class=\"btn btn-primary\">";
        echo (isset($context["button_apply"]) ? $context["button_apply"] : null);
        echo "</button>
                      </span></div>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-coupon\">";
        // line 882
        echo (isset($context["entry_coupon"]) ? $context["entry_coupon"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"coupon\" value=\"";
        // line 885
        echo (isset($context["coupon"]) ? $context["coupon"] : null);
        echo "\" id=\"input-coupon\" class=\"form-control\" />
                      <span class=\"input-group-btn\">
                      <button type=\"button\" id=\"button-coupon\" data-loading-text=\"";
        // line 887
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" class=\"btn btn-primary\">";
        echo (isset($context["button_apply"]) ? $context["button_apply"] : null);
        echo "</button>
                      </span></div>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-voucher\">";
        // line 892
        echo (isset($context["entry_voucher"]) ? $context["entry_voucher"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"voucher\" value=\"";
        // line 895
        echo (isset($context["voucher"]) ? $context["voucher"] : null);
        echo "\" id=\"input-voucher\" data-loading-text=\"";
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" class=\"form-control\" />
                      <span class=\"input-group-btn\">
                      <button type=\"button\" id=\"button-voucher\" data-loading-text=\"";
        // line 897
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" class=\"btn btn-primary\">";
        echo (isset($context["button_apply"]) ? $context["button_apply"] : null);
        echo "</button>
                      </span></div>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-reward\">";
        // line 902
        echo (isset($context["entry_reward"]) ? $context["entry_reward"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"reward\" value=\"";
        // line 905
        echo (isset($context["reward"]) ? $context["reward"] : null);
        echo "\" id=\"input-reward\" data-loading-text=\"";
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" class=\"form-control\" />
                      <span class=\"input-group-btn\">
                      <button type=\"button\" id=\"button-reward\" data-loading-text=\"";
        // line 907
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" class=\"btn btn-primary\">";
        echo (isset($context["button_apply"]) ? $context["button_apply"] : null);
        echo "</button>
                      </span></div>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-order-status\">";
        // line 912
        echo (isset($context["entry_order_status"]) ? $context["entry_order_status"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"order_status_id\" id=\"input-order-status\" class=\"form-control\">
                      ";
        // line 915
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 916
            echo "                      ";
            if (($this->getAttribute($context["order_status"], "order_status_id", array()) == (isset($context["order_status_id"]) ? $context["order_status_id"] : null))) {
                // line 917
                echo "                      <option value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
                      ";
            } else {
                // line 919
                echo "                      <option value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
                      ";
            }
            // line 921
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 922
        echo "                    </select>
                    <input type=\"hidden\" name=\"order_id\" value=\"";
        // line 923
        echo (isset($context["order_id"]) ? $context["order_id"] : null);
        echo "\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-comment\">";
        // line 927
        echo (isset($context["entry_comment"]) ? $context["entry_comment"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"comment\" rows=\"5\" id=\"input-comment\" class=\"form-control\">";
        // line 929
        echo (isset($context["comment"]) ? $context["comment"] : null);
        echo "</textarea>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-affiliate\">";
        // line 933
        echo (isset($context["entry_affiliate"]) ? $context["entry_affiliate"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"affiliate\" value=\"";
        // line 935
        echo (isset($context["affiliate"]) ? $context["affiliate"] : null);
        echo "\" id=\"input-affiliate\" class=\"form-control\" />
                    <input type=\"hidden\" name=\"affiliate_id\" value=\"";
        // line 936
        echo (isset($context["affiliate_id"]) ? $context["affiliate_id"] : null);
        echo "\" />
                  </div>
                </div>
              </fieldset>
              <div class=\"row\">
                <div class=\"col-sm-6 text-left\">
                  <button type=\"button\" onclick=\"\$('select[name=\\'shipping_method\\']').prop('disabled') ? \$('a[href=\\'#tab-payment\\']').tab('show') : \$('a[href=\\'#tab-shipping\\']').tab('show');\" class=\"btn btn-default\"><i class=\"fa fa-arrow-left\"></i> ";
        // line 942
        echo (isset($context["button_back"]) ? $context["button_back"] : null);
        echo "</button>
                </div>
                <div class=\"col-sm-6 text-right\">
                  <button type=\"button\" id=\"button-refresh\" data-toggle=\"tooltip\" title=\"";
        // line 945
        echo (isset($context["button_refresh"]) ? $context["button_refresh"] : null);
        echo "\" data-loading-text=\"";
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" class=\"btn btn-warning\"><i class=\"fa fa-refresh\"></i></button>
                  <button type=\"button\" id=\"button-save\" class=\"btn btn-primary\"><i class=\"fa fa-check-circle\"></i> ";
        // line 946
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "</button>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
// Disable the tabs
\$('#order a[data-toggle=\\'tab\\']').on('click', function(e) {
\treturn false;
});

// Currency
\$('select[name=\\'currency\\']').on('change', function() {
\t\$.ajax({
\t\turl: '";
        // line 964
        echo (isset($context["catalog"]) ? $context["catalog"] : null);
        echo "index.php?route=api/currency&api_token=";
        echo (isset($context["api_token"]) ? $context["api_token"] : null);
        echo "&store_id=' + \$('select[name=\\'store_id\\'] option:selected').val(),
\t\ttype: 'post',
\t\tdata: 'currency=' + \$('select[name=\\'currency\\'] option:selected').val(),
\t\tdataType: 'json',
\t\tcrossDomain: true,
\t\tbeforeSend: function() {
\t\t\t\$('select[name=\\'currency\\']').prop('disabled', true);
\t\t},
\t\tcomplete: function() {
\t\t\t\$('select[name=\\'currency\\']').prop('disabled', false);
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();
\t\t\t\$('.form-group').removeClass('has-error');

\t\t\tif (json['error']) {
\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('select[name=\\'currency\\']').closest('.form-group').addClass('has-error');
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('select[name=\\'currency\\']').trigger('change');

// Customer
\$('input[name=\\'customer\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=customer/customer/autocomplete&user_token=";
        // line 998
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tjson.unshift({
\t\t\t\t\tcustomer_id: '0',
\t\t\t\t\tcustomer_group_id: '";
        // line 1003
        echo (isset($context["customer_group_id"]) ? $context["customer_group_id"] : null);
        echo "',
\t\t\t\t\tname: '";
        // line 1004
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "',
\t\t\t\t\tcustomer_group: '',
\t\t\t\t\tfirstname: '',
\t\t\t\t\tlastname: '',
\t\t\t\t\temail: '',
\t\t\t\t\ttelephone: '',
\t\t\t\t\tcustom_field: [],
\t\t\t\t\taddress: []
\t\t\t\t});

\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tcategory: item['customer_group'],
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['customer_id'],
\t\t\t\t\t\tcustomer_group_id: item['customer_group_id'],
\t\t\t\t\t\tfirstname: item['firstname'],
\t\t\t\t\t\tlastname: item['lastname'],
\t\t\t\t\t\temail: item['email'],
\t\t\t\t\t\ttelephone: item['telephone'],
\t\t\t\t\t\tcustom_field: item['custom_field'],
\t\t\t\t\t\taddress: item['address']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t// Reset all custom fields
\t\t\$('#tab-customer input[type=\\'text\\'], #tab-customer textarea').not('#tab-customer input[name=\\'customer\\'], #tab-customer input[name=\\'customer_id\\']').val('');
\t\t\$('#tab-customer select option').not(\$('#tab-customer select[name=\\'store_id\\'] option, #tab-customer select[name=\\'currency\\'] option')).removeAttr('selected');
\t\t\$('#tab-customer input[type=\\'checkbox\\'], #tab-customer input[type=\\'radio\\']').removeAttr('checked');

\t\t\$('#tab-customer input[name=\\'customer\\']').val(item['label']);
\t\t\$('#tab-customer input[name=\\'customer_id\\']').val(item['value']);
\t\t\$('#tab-customer select[name=\\'customer_group_id\\']').val(item['customer_group_id']);
\t\t\$('#tab-customer input[name=\\'firstname\\']').val(item['firstname']);
\t\t\$('#tab-customer input[name=\\'lastname\\']').val(item['lastname']);
\t\t\$('#tab-customer input[name=\\'email\\']').val(item['email']);
\t\t\$('#tab-customer input[name=\\'telephone\\']').val(item['telephone']);

\t\tfor (i in item.custom_field) {
\t\t\t\$('#tab-customer select[name=\\'custom_field[' + i + ']\\']').val(item.custom_field[i]);
\t\t\t\$('#tab-customer textarea[name=\\'custom_field[' + i + ']\\']').val(item.custom_field[i]);
\t\t\t\$('#tab-customer input[name^=\\'custom_field[' + i + ']\\'][type=\\'text\\']').val(item.custom_field[i]);
\t\t\t\$('#tab-customer input[name^=\\'custom_field[' + i + ']\\'][type=\\'hidden\\']').val(item.custom_field[i]);
\t\t\t\$('#tab-customer input[name^=\\'custom_field[' + i + ']\\'][type=\\'radio\\'][value=\\'' + item.custom_field[i] + '\\']').prop('checked', true);

\t\t\tif (item.custom_field[i] instanceof Array) {
\t\t\t\tfor (j = 0; j < item.custom_field[i].length; j++) {
\t\t\t\t\t\$('#tab-customer input[name^=\\'custom_field[' + i + ']\\'][type=\\'checkbox\\'][value=\\'' + item.custom_field[i][j] + '\\']').prop('checked', true);
\t\t\t\t}
\t\t\t}
\t\t}

\t\t\$('select[name=\\'customer_group_id\\']').trigger('change');

\t\thtml = '<option value=\"0\">";
        // line 1061
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>';

\t\tfor (i in  item['address']) {
\t\t\thtml += '<option value=\"' + item['address'][i]['address_id'] + '\">' + item['address'][i]['firstname'] + ' ' + item['address'][i]['lastname'] + ', ' + item['address'][i]['address_1'] + ', ' + item['address'][i]['city'] + ', ' + item['address'][i]['country'] + '</option>';
\t\t}

\t\t\$('select[name=\\'payment_address\\']').html(html);
\t\t\$('select[name=\\'shipping_address\\']').html(html);
\t}
});

// Custom Fields
\$('select[name=\\'customer_group_id\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=customer/customer/customfield&user_token=";
        // line 1075
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&customer_group_id=' + this.value,
\t\tdataType: 'json',
\t\tsuccess: function(json) {
\t\t\t\$('.custom-field').hide();
\t\t\t\$('.custom-field').removeClass('required');

\t\t\tfor (i = 0; i < json.length; i++) {
\t\t\t\tcustom_field = json[i];

\t\t\t\t\$('.custom-field' + custom_field['custom_field_id']).show();

\t\t\t\tif (custom_field['required']) {
\t\t\t\t\t\$('.custom-field' + custom_field['custom_field_id']).addClass('required');
\t\t\t\t}
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('select[name=\\'customer_group_id\\']').trigger('change');

\$('#button-customer').on('click', function() {
\t\$.ajax({
\t\turl: '";
        // line 1101
        echo (isset($context["catalog"]) ? $context["catalog"] : null);
        echo "index.php?route=api/customer&api_token=";
        echo (isset($context["api_token"]) ? $context["api_token"] : null);
        echo "&store_id=' + \$('select[name=\\'store_id\\'] option:selected').val(),
\t\ttype: 'post',
\t\tdata: \$('#tab-customer input[type=\\'text\\'], #tab-customer input[type=\\'hidden\\'], #tab-customer input[type=\\'radio\\']:checked, #tab-customer input[type=\\'checkbox\\']:checked, #tab-customer select, #tab-customer textarea'),
\t\tdataType: 'json',
\t\tcrossDomain: true,
\t\tbeforeSend: function() {
\t\t\t\$('#button-customer').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t \$('#button-customer').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();
\t\t\t\$('.form-group').removeClass('has-error');

\t\t\tif (json['error']) {
\t\t\t\tif (json['error']['warning']) {
\t\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t}

\t\t\t\tfor (i in json['error']) {
\t\t\t\t\tvar element = \$('#input-' + i.replace('_', '-'));

\t\t\t\t\tif (element.parent().hasClass('input-group')) {
                   \t\t\$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t} else {
\t\t\t\t\t\t\$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('.text-danger').parentsUntil('.form-group').parent().addClass('has-error');
\t\t\t} else {
                // Refresh products, vouchers and totals
                var request_1 = \$.ajax({
                    url: '";
        // line 1136
        echo (isset($context["catalog"]) ? $context["catalog"] : null);
        echo "index.php?route=api/cart/add&api_token=";
        echo (isset($context["api_token"]) ? $context["api_token"] : null);
        echo "&store_id=' + \$('select[name=\\'store_id\\'] option:selected').val(),
                    type: 'post',
                    data: \$('#cart input[name^=\\'product\\'][type=\\'text\\'], #cart input[name^=\\'product\\'][type=\\'hidden\\'], #cart input[name^=\\'product\\'][type=\\'radio\\']:checked, #cart input[name^=\\'product\\'][type=\\'checkbox\\']:checked, #cart select[name^=\\'product\\'], #cart textarea[name^=\\'product\\']'),
                    dataType: 'json',
                    crossDomain: true,
                    beforeSend: function() {
                        \$('#button-product-add').button('loading');
                    },
                    complete: function() {
                        \$('#button-product-add').button('reset');
                    },
                    success: function(json) {
                        \$('.alert-dismissible, .text-danger').remove();
                        \$('.form-group').removeClass('has-error');

                        if (json['error'] && json['error']['warning']) {
                            \$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                        }
            \t\t},
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                });

                var request_2 = request_1.then(function() {
                    \$.ajax({
                        url: '";
        // line 1162
        echo (isset($context["catalog"]) ? $context["catalog"] : null);
        echo "index.php?route=api/voucher/add&api_token=";
        echo (isset($context["api_token"]) ? $context["api_token"] : null);
        echo "&store_id=' + \$('select[name=\\'store_id\\'] option:selected').val(),
                        type: 'post',
                        data: \$('#cart input[name^=\\'voucher\\'][type=\\'text\\'], #cart input[name^=\\'voucher\\'][type=\\'hidden\\'], #cart input[name^=\\'voucher\\'][type=\\'radio\\']:checked, #cart input[name^=\\'voucher\\'][type=\\'checkbox\\']:checked, #cart select[name^=\\'voucher\\'], #cart textarea[name^=\\'voucher\\']'),
                        dataType: 'json',
                        crossDomain: true,
                        beforeSend: function() {
                            \$('#button-voucher-add').button('loading');
                        },
                        complete: function() {
                            \$('#button-voucher-add').button('reset');
                        },
                        success: function(json) {
                            \$('.alert-dismissible, .text-danger').remove();
                            \$('.form-group').removeClass('has-error');

                            if (json['error'] && json['error']['warning']) {
                                \$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                            }
                \t\t},
                        error: function(xhr, ajaxOptions, thrownError) {
                            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                        }
                    });
                });

                request_2.done(function() {
                    \$('#button-refresh').trigger('click');

                    \$('a[href=\\'#tab-cart\\']').tab('show');
                });
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('#tab-product input[name=\\'product\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 1203
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['product_id'],
\t\t\t\t\t\tmodel: item['model'],
\t\t\t\t\t\toption: item['option'],
\t\t\t\t\t\tprice: item['price']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('#tab-product input[name=\\'product\\']').val(item['label']);
\t\t\$('#tab-product input[name=\\'product_id\\']').val(item['value']);

\t\tif (item['option'] != '') {
 \t\t\thtml  = '<fieldset>';
            html += '  <legend>";
        // line 1224
        echo (isset($context["entry_option"]) ? $context["entry_option"] : null);
        echo "</legend>';

\t\t\tfor (i = 0; i < item['option'].length; i++) {
\t\t\t\toption = item['option'][i];

\t\t\t\tif (option['type'] == 'select') {
\t\t\t\t\thtml += '<div class=\"form-group' + (option['required'] ? ' required' : '') + '\">';
\t\t\t\t\thtml += '  <label class=\"col-sm-2 control-label\" for=\"input-option' + option['product_option_id'] + '\">' + option['name'] + '</label>';
\t\t\t\t\thtml += '  <div class=\"col-sm-10\">';
\t\t\t\t\thtml += '    <select name=\"option[' + option['product_option_id'] + ']\" id=\"input-option' + option['product_option_id'] + '\" class=\"form-control\">';
\t\t\t\t\thtml += '      <option value=\"\">";
        // line 1234
        echo (isset($context["text_select"]) ? $context["text_select"] : null);
        echo "</option>';

\t\t\t\t\tfor (j = 0; j < option['product_option_value'].length; j++) {
\t\t\t\t\t\toption_value = option['product_option_value'][j];

\t\t\t\t\t\thtml += '<option value=\"' + option_value['product_option_value_id'] + '\">' + option_value['name'];

\t\t\t\t\t\tif (option_value['price']) {
\t\t\t\t\t\t\thtml += ' (' + option_value['price_prefix'] + option_value['price'] + ')';
\t\t\t\t\t\t}

\t\t\t\t\t\thtml += '</option>';
\t\t\t\t\t}

\t\t\t\t\thtml += '    </select>';
\t\t\t\t\thtml += '  </div>';
\t\t\t\t\thtml += '</div>';
\t\t\t\t}

\t\t\t\tif (option['type'] == 'radio') {
\t\t\t\t\thtml += '<div class=\"form-group' + (option['required'] ? ' required' : '') + '\">';
\t\t\t\t\thtml += '  <label class=\"col-sm-2 control-label\" for=\"input-option' + option['product_option_id'] + '\">' + option['name'] + '</label>';
\t\t\t\t\thtml += '  <div class=\"col-sm-10\">';
\t\t\t\t\thtml += '    <select name=\"option[' + option['product_option_id'] + ']\" id=\"input-option' + option['product_option_id'] + '\" class=\"form-control\">';
\t\t\t\t\thtml += '      <option value=\"\">";
        // line 1258
        echo (isset($context["text_select"]) ? $context["text_select"] : null);
        echo "</option>';

\t\t\t\t\tfor (j = 0; j < option['product_option_value'].length; j++) {
\t\t\t\t\t\toption_value = option['product_option_value'][j];

\t\t\t\t\t\thtml += '<option value=\"' + option_value['product_option_value_id'] + '\">' + option_value['name'];

\t\t\t\t\t\tif (option_value['price']) {
\t\t\t\t\t\t\thtml += ' (' + option_value['price_prefix'] + option_value['price'] + ')';
\t\t\t\t\t\t}

\t\t\t\t\t\thtml += '</option>';
\t\t\t\t\t}

\t\t\t\t\thtml += '    </select>';
\t\t\t\t\thtml += '  </div>';
\t\t\t\t\thtml += '</div>';
\t\t\t\t}

\t\t\t\tif (option['type'] == 'checkbox') {
\t\t\t\t\thtml += '<div class=\"form-group' + (option['required'] ? ' required' : '') + '\">';
\t\t\t\t\thtml += '  <label class=\"col-sm-2 control-label\">' + option['name'] + '</label>';
\t\t\t\t\thtml += '  <div class=\"col-sm-10\">';
\t\t\t\t\thtml += '    <div id=\"input-option' + option['product_option_id'] + '\">';

\t\t\t\t\tfor (j = 0; j < option['product_option_value'].length; j++) {
\t\t\t\t\t\toption_value = option['product_option_value'][j];

\t\t\t\t\t\thtml += '<div class=\"checkbox\">';

\t\t\t\t\t\thtml += '  <label><input type=\"checkbox\" name=\"option[' + option['product_option_id'] + '][]\" value=\"' + option_value['product_option_value_id'] + '\" /> ' + option_value['name'];

\t\t\t\t\t\tif (option_value['price']) {
\t\t\t\t\t\t\thtml += ' (' + option_value['price_prefix'] + option_value['price'] + ')';
\t\t\t\t\t\t}

\t\t\t\t\t\thtml += '  </label>';
\t\t\t\t\t\thtml += '</div>';
\t\t\t\t\t}

\t\t\t\t\thtml += '    </div>';
\t\t\t\t\thtml += '  </div>';
\t\t\t\t\thtml += '</div>';
\t\t\t\t}

\t\t\t\tif (option['type'] == 'image') {
\t\t\t\t\thtml += '<div class=\"form-group' + (option['required'] ? ' required' : '') + '\">';
\t\t\t\t\thtml += '  <label class=\"col-sm-2 control-label\" for=\"input-option' + option['product_option_id'] + '\">' + option['name'] + '</label>';
\t\t\t\t\thtml += '  <div class=\"col-sm-10\">';
\t\t\t\t\thtml += '    <select name=\"option[' + option['product_option_id'] + ']\" id=\"input-option' + option['product_option_id'] + '\" class=\"form-control\">';
\t\t\t\t\thtml += '      <option value=\"\">";
        // line 1308
        echo (isset($context["text_select"]) ? $context["text_select"] : null);
        echo "</option>';

\t\t\t\t\tfor (j = 0; j < option['product_option_value'].length; j++) {
\t\t\t\t\t\toption_value = option['product_option_value'][j];

\t\t\t\t\t\thtml += '<option value=\"' + option_value['product_option_value_id'] + '\">' + option_value['name'];

\t\t\t\t\t\tif (option_value['price']) {
\t\t\t\t\t\t\thtml += ' (' + option_value['price_prefix'] + option_value['price'] + ')';
\t\t\t\t\t\t}

\t\t\t\t\t\thtml += '</option>';
\t\t\t\t\t}

\t\t\t\t\thtml += '    </select>';
\t\t\t\t\thtml += '  </div>';
\t\t\t\t\thtml += '</div>';
\t\t\t\t}

\t\t\t\tif (option['type'] == 'text') {
\t\t\t\t\thtml += '<div class=\"form-group' + (option['required'] ? ' required' : '') + '\">';
\t\t\t\t\thtml += '  <label class=\"col-sm-2 control-label\" for=\"input-option' + option['product_option_id'] + '\">' + option['name'] + '</label>';
\t\t\t\t\thtml += '  <div class=\"col-sm-10\"><input type=\"text\" name=\"option[' + option['product_option_id'] + ']\" value=\"' + option['value'] + '\" id=\"input-option' + option['product_option_id'] + '\" class=\"form-control\" /></div>';
\t\t\t\t\thtml += '</div>';
\t\t\t\t}

\t\t\t\tif (option['type'] == 'textarea') {
\t\t\t\t\thtml += '<div class=\"form-group' + (option['required'] ? ' required' : '') + '\">';
\t\t\t\t\thtml += '  <label class=\"col-sm-2 control-label\" for=\"input-option' + option['product_option_id'] + '\">' + option['name'] + '</label>';
\t\t\t\t\thtml += '  <div class=\"col-sm-10\"><textarea name=\"option[' + option['product_option_id'] + ']\" rows=\"5\" id=\"input-option' + option['product_option_id'] + '\" class=\"form-control\">' + option['value'] + '</textarea></div>';
\t\t\t\t\thtml += '</div>';
\t\t\t\t}

\t\t\t\tif (option['type'] == 'file') {
\t\t\t\t\thtml += '<div class=\"form-group' + (option['required'] ? ' required' : '') + '\">';
\t\t\t\t\thtml += '  <label class=\"col-sm-2 control-label\">' + option['name'] + '</label>';
\t\t\t\t\thtml += '  <div class=\"col-sm-10\">';
\t\t\t\t\thtml += '    <button type=\"button\" id=\"button-upload' + option['product_option_id'] + '\" data-loading-text=\"";
        // line 1345
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> ";
        echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
        echo "</button>';
\t\t\t\t\thtml += '    <input type=\"hidden\" name=\"option[' + option['product_option_id'] + ']\" value=\"' + option['value'] + '\" id=\"input-option' + option['product_option_id'] + '\" />';
\t\t\t\t\thtml += '  </div>';
\t\t\t\t\thtml += '</div>';
\t\t\t\t}

\t\t\t\tif (option['type'] == 'date') {
\t\t\t\t\thtml += '<div class=\"form-group' + (option['required'] ? ' required' : '') + '\">';
\t\t\t\t\thtml += '  <label class=\"col-sm-2 control-label\" for=\"input-option' + option['product_option_id'] + '\">' + option['name'] + '</label>';
\t\t\t\t\thtml += '  <div class=\"col-sm-3\"><div class=\"input-group date\"><input type=\"text\" name=\"option[' + option['product_option_id'] + ']\" value=\"' + option['value'] + '\" placeholder=\"' + option['name'] + '\" data-date-format=\"YYYY-MM-DD\" id=\"input-option' + option['product_option_id'] + '\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></div>';
\t\t\t\t\thtml += '</div>';
\t\t\t\t}

\t\t\t\tif (option['type'] == 'datetime') {
\t\t\t\t\thtml += '<div class=\"form-group' + (option['required'] ? ' required' : '') + '\">';
\t\t\t\t\thtml += '  <label class=\"col-sm-2 control-label\" for=\"input-option' + option['product_option_id'] + '\">' + option['name'] + '</label>';
\t\t\t\t\thtml += '  <div class=\"col-sm-3\"><div class=\"input-group datetime\"><input type=\"text\" name=\"option[' + option['product_option_id'] + ']\" value=\"' + option['value'] + '\" placeholder=\"' + option['name'] + '\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-option' + option['product_option_id'] + '\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></div>';
\t\t\t\t\thtml += '</div>';
\t\t\t\t}

\t\t\t\tif (option['type'] == 'time') {
\t\t\t\t\thtml += '<div class=\"form-group' + (option['required'] ? ' required' : '') + '\">';
\t\t\t\t\thtml += '  <label class=\"col-sm-2 control-label\" for=\"input-option' + option['product_option_id'] + '\">' + option['name'] + '</label>';
\t\t\t\t\thtml += '  <div class=\"col-sm-3\"><div class=\"input-group time\"><input type=\"text\" name=\"option[' + option['product_option_id'] + ']\" value=\"' + option['value'] + '\" placeholder=\"' + option['name'] + '\" data-date-format=\"HH:mm\" id=\"input-option' + option['product_option_id'] + '\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></div>';
\t\t\t\t\thtml += '</div>';
\t\t\t\t}
\t\t\t}

\t\t\thtml += '</fieldset>';

\t\t\t\$('#option').html(html);

\t\t\t\$('.date').datetimepicker({
\t\t\t\tlanguage: '";
        // line 1378
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\t\t\t\tpickTime: false
\t\t\t});

\t\t\t\$('.datetime').datetimepicker({
\t\t\t\tlanguage: '";
        // line 1383
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\t\t\t\tpickDate: true,
\t\t\t\tpickTime: true
\t\t\t});

\t\t\t\$('.time').datetimepicker({
\t\t\t\tlanguage: '";
        // line 1389
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\t\t\t\tpickDate: false
\t\t\t});
\t\t} else {
\t\t\t\$('#option').html('');
\t\t}
\t}
});

\$('#button-product-add').on('click', function() {
\t\$.ajax({
\t\turl: '";
        // line 1400
        echo (isset($context["catalog"]) ? $context["catalog"] : null);
        echo "index.php?route=api/cart/add&api_token=";
        echo (isset($context["api_token"]) ? $context["api_token"] : null);
        echo "&store_id=' + \$('select[name=\\'store_id\\'] option:selected').val(),
\t\ttype: 'post',
\t\tdata: \$('#tab-product input[name=\\'product_id\\'], #tab-product input[name=\\'quantity\\'], #tab-product input[name^=\\'option\\'][type=\\'text\\'], #tab-product input[name^=\\'option\\'][type=\\'hidden\\'], #tab-product input[name^=\\'option\\'][type=\\'radio\\']:checked, #tab-product input[name^=\\'option\\'][type=\\'checkbox\\']:checked, #tab-product select[name^=\\'option\\'], #tab-product textarea[name^=\\'option\\']'),
\t\tdataType: 'json',
\t\tcrossDomain: true,
\t\tbeforeSend: function() {
\t\t\t\$('#button-product-add').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-product-add').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();
\t\t\t\$('.form-group').removeClass('has-error');

\t\t\tif (json['error']) {
\t\t\t\tif (json['error']['warning']) {
\t\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t}

\t\t\t\tif (json['error']['option']) {
\t\t\t\t\tfor (i in json['error']['option']) {
\t\t\t\t\t\tvar element = \$('#input-option' + i.replace('_', '-'));

\t\t\t\t\t\tif (element.parent().hasClass('input-group')) {
\t\t\t\t\t\t\t\$(element).parent().after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\$(element).after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\tif (json['error']['store']) {
\t\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['store'] + '</div>');
\t\t\t\t}

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('.text-danger').parentsUntil('.form-group').parent().addClass('has-error');
\t\t\t} else {
\t\t\t\t// Refresh products, vouchers and totals
\t\t\t\t\$('#button-refresh').trigger('click');
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

// Voucher
\$('#button-voucher-add').on('click', function() {
\t\$.ajax({
\t\turl: '";
        // line 1452
        echo (isset($context["catalog"]) ? $context["catalog"] : null);
        echo "index.php?route=api/voucher/add&api_token=";
        echo (isset($context["api_token"]) ? $context["api_token"] : null);
        echo "&store_id=' + \$('select[name=\\'store_id\\'] option:selected').val(),
\t\ttype: 'post',
\t\tdata: \$('#tab-voucher input[type=\\'text\\'], #tab-voucher input[type=\\'hidden\\'], #tab-voucher input[type=\\'radio\\']:checked, #tab-voucher input[type=\\'checkbox\\']:checked, #tab-voucher select, #tab-voucher textarea'),
\t\tdataType: 'json',
\t\tcrossDomain: true,
\t\tbeforeSend: function() {
\t\t\t\$('#button-voucher-add').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-voucher-add').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();
\t\t\t\$('.form-group').removeClass('has-error');

\t\t\tif (json['error']) {
\t\t\t\tif (json['error']['warning']) {
\t\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t}

\t\t\t\tfor (i in json['error']) {
\t\t\t\t\tvar element = \$('#input-' + i.replace('_', '-'));

\t\t\t\t\tif (element.parent().hasClass('input-group')) {
\t\t\t\t\t\t\$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t} else {
\t\t\t\t\t\t\$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('.text-danger').parentsUntil('.form-group').parent().addClass('has-error');
\t\t\t} else {
\t\t\t\t\$('input[name=\\'from_name\\']').val('');
\t\t\t\t\$('input[name=\\'from_email\\']').val('');
\t\t\t\t\$('input[name=\\'to_name\\']').val('');
\t\t\t\t\$('input[name=\\'to_email\\']').val('');
\t\t\t\t\$('textarea[name=\\'message\\']').val('');
\t\t\t\t\$('input[name=\\'amount\\']').val('";
        // line 1490
        echo twig_escape_filter($this->env, (isset($context["voucher_min"]) ? $context["voucher_min"] : null), "js");
        echo "');

\t\t\t\t// Refresh products, vouchers and totals
\t\t\t\t\$('#button-refresh').trigger('click');
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('#cart').delegate('.btn-danger', 'click', function() {
\tvar node = this;

\t\$.ajax({
\t\turl: '";
        // line 1506
        echo (isset($context["catalog"]) ? $context["catalog"] : null);
        echo "index.php?route=api/cart/remove&api_token=";
        echo (isset($context["api_token"]) ? $context["api_token"] : null);
        echo "&store_id=' + \$('select[name=\\'store_id\\'] option:selected').val(),
\t\ttype: 'post',
\t\tdata: 'key=' + encodeURIComponent(this.value),
\t\tdataType: 'json',
\t\tcrossDomain: true,
\t\tbeforeSend: function() {
\t\t\t\$(node).button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$(node).button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();

\t\t\t// Check for errors
\t\t\tif (json['error']) {
\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t} else {
\t\t\t\t// Refresh products, vouchers and totals
\t\t\t\t\$('#button-refresh').trigger('click');
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('#cart').delegate('.btn-primary', 'click', function() {
    var node = this;

    // Refresh products, vouchers and totals
    \$.ajax({
        url: '";
        // line 1539
        echo (isset($context["catalog"]) ? $context["catalog"] : null);
        echo "index.php?route=api/cart/add&api_token=";
        echo (isset($context["api_token"]) ? $context["api_token"] : null);
        echo "&store_id=' + \$('select[name=\\'store_id\\'] option:selected').val(),
        type: 'post',
        data: \$('#cart input[name^=\\'product\\'][type=\\'text\\'], #cart input[name^=\\'product\\'][type=\\'hidden\\'], #cart input[name^=\\'product\\'][type=\\'radio\\']:checked, #cart input[name^=\\'product\\'][type=\\'checkbox\\']:checked, #cart select[name^=\\'product\\'], #cart textarea[name^=\\'product\\']'),
        dataType: 'json',
        crossDomain: true,
        beforeSend: function() {
            \$(node).button('loading');
        },
        complete: function() {
            \$(node).button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible, .text-danger').remove();
            \$('.form-group').removeClass('has-error');

            if (json['error'] && json['error']['warning']) {
                \$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
            }

            if (json['success']) {
\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t}
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    }).done(function() {
        \$('#button-refresh').trigger('click');
    });
});

\$('#button-cart').on('click', function() {
\t\$('a[href=\\'#tab-payment\\']').tab('show');
});

// Payment Address
\$('select[name=\\'payment_address\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=customer/customer/address&user_token=";
        // line 1577
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&address_id=' + this.value,
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('select[name=\\'payment_address\\']').prop('disabled', true);
\t\t},
\t\tcomplete: function() {
\t\t\t\$('select[name=\\'payment_address\\']').prop('disabled', false);
\t\t},
\t\tsuccess: function(json) {
\t\t\t// Reset all fields
\t\t\t\$('#tab-payment input[type=\\'text\\'], #tab-payment input[type=\\'text\\'], #tab-payment textarea').val('');
\t\t\t\$('#tab-payment select option').not('#tab-payment select[name=\\'payment_address\\']').removeAttr('selected');
\t\t\t\$('#tab-payment input[type=\\'checkbox\\'], #tab-payment input[type=\\'radio\\']').removeAttr('checked');

\t\t\t\$('#tab-payment input[name=\\'firstname\\']').val(json['firstname']);
\t\t\t\$('#tab-payment input[name=\\'lastname\\']').val(json['lastname']);
\t\t\t\$('#tab-payment input[name=\\'company\\']').val(json['company']);
\t\t\t\$('#tab-payment input[name=\\'address_1\\']').val(json['address_1']);
\t\t\t\$('#tab-payment input[name=\\'address_2\\']').val(json['address_2']);
\t\t\t\$('#tab-payment input[name=\\'city\\']').val(json['city']);
\t\t\t\$('#tab-payment input[name=\\'postcode\\']').val(json['postcode']);
\t\t\t\$('#tab-payment select[name=\\'country_id\\']').val(json['country_id']);

\t\t\tpayment_zone_id = json['zone_id'];

\t\t\tfor (i in json['custom_field']) {
\t\t\t\t\$('#tab-payment select[name=\\'custom_field[' + i + ']\\']').val(json['custom_field'][i]);
\t\t\t\t\$('#tab-payment textarea[name=\\'custom_field[' + i + ']\\']').val(json['custom_field'][i]);
\t\t\t\t\$('#tab-payment input[name^=\\'custom_field[' + i + ']\\'][type=\\'text\\']').val(json['custom_field'][i]);
\t\t\t\t\$('#tab-payment input[name^=\\'custom_field[' + i + ']\\'][type=\\'hidden\\']').val(json['custom_field'][i]);
\t\t\t\t\$('#tab-payment input[name^=\\'custom_field[' + i + ']\\'][type=\\'radio\\'][value=\\'' + json['custom_field'][i] + '\\']').prop('checked', true);
\t\t\t\t\$('#tab-payment input[name^=\\'custom_field[' + i + ']\\'][type=\\'checkbox\\'][value=\\'' + json['custom_field'][i] + '\\']').prop('checked', true);

\t\t\t\tif (json['custom_field'][i] instanceof Array) {
\t\t\t\t\tfor (j = 0; j < json['custom_field'][i].length; j++) {
\t\t\t\t\t\t\$('#tab-payment input[name^=\\'custom_field[' + i + ']\\'][type=\\'checkbox\\'][value=\\'' + json['custom_field'][i][j] + '\\']').prop('checked', true);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t\t\t\$('#tab-payment select[name=\\'country_id\\']').trigger('change');
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

var payment_zone_id = '";
        // line 1625
        echo (isset($context["payment_zone_id"]) ? $context["payment_zone_id"] : null);
        echo "';

\$('#tab-payment select[name=\\'country_id\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=localisation/country/country&user_token=";
        // line 1629
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&country_id=' + this.value,
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#tab-payment select[name=\\'country_id\\']').after(' <i class=\"fa fa-circle-o-notch fa-spin\"></i>');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#tab-payment .fa-spin').remove();
\t\t},
\t\tsuccess: function(json) {
\t\t\tif (json['postcode_required'] == '1') {
\t\t\t\t\$('#tab-payment input[name=\\'postcode\\']').closest('.form-group').addClass('required');
\t\t\t} else {
\t\t\t\t\$('#tab-payment input[name=\\'postcode\\']').closest('.form-group').removeClass('required');
\t\t\t}

\t\t\thtml = '<option value=\"\">";
        // line 1644
        echo (isset($context["text_select"]) ? $context["text_select"] : null);
        echo "</option>';

\t\t\tif (json['zone'] && json['zone'] != '') {
\t\t\t\tfor (i = 0; i < json['zone'].length; i++) {
        \t\t\thtml += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

\t\t\t\t\tif (json['zone'][i]['zone_id'] == payment_zone_id) {
\t      \t\t\t\thtml += ' selected=\"selected\"';
\t    \t\t\t}

\t    \t\t\thtml += '>' + json['zone'][i]['name'] + '</option>';
\t\t\t\t}
\t\t\t} else {
\t\t\t\thtml += '<option value=\"0\" selected=\"selected\">";
        // line 1657
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>';
\t\t\t}

\t\t\t\$('#tab-payment select[name=\\'zone_id\\']').html(html);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('#tab-payment select[name=\\'country_id\\']').trigger('change');

\$('#button-payment-address').on('click', function() {
\t\$.ajax({
\t\turl: '";
        // line 1672
        echo (isset($context["catalog"]) ? $context["catalog"] : null);
        echo "index.php?route=api/payment/address&api_token=";
        echo (isset($context["api_token"]) ? $context["api_token"] : null);
        echo "&store_id=' + \$('select[name=\\'store_id\\'] option:selected').val(),
\t\ttype: 'post',
\t\tdata: \$('#tab-payment input[type=\\'text\\'], #tab-payment input[type=\\'hidden\\'], #tab-payment input[type=\\'radio\\']:checked, #tab-payment input[type=\\'checkbox\\']:checked, #tab-payment select, #tab-payment textarea'),
\t\tdataType: 'json',
\t\tcrossDomain: true,
\t\tbeforeSend: function() {
\t\t\t\$('#button-payment-address').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-payment-address').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();
\t\t\t\$('.form-group').removeClass('has-error');

\t\t\t// Check for errors
\t\t\tif (json['error']) {
\t\t\t\tif (json['error']['warning']) {
\t\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t}

\t\t\t\tfor (i in json['error']) {
\t\t\t\t\tvar element = \$('#input-payment-' + i.replace('_', '-'));

\t\t\t\t\tif (\$(element).parent().hasClass('input-group')) {
\t\t\t\t\t\t\$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t} else {
\t\t\t\t\t\t\$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('.text-danger').parentsUntil('.form-group').parent().addClass('has-error');
\t\t\t} else {
\t\t\t\t// Payment Methods
\t\t\t\t\$.ajax({
\t\t\t\t\turl: '";
        // line 1708
        echo (isset($context["catalog"]) ? $context["catalog"] : null);
        echo "index.php?route=api/payment/methods&api_token=";
        echo (isset($context["api_token"]) ? $context["api_token"] : null);
        echo "&store_id=' + \$('select[name=\\'store_id\\'] option:selected').val(),
\t\t\t\t\tdataType: 'json',
\t\t\t\t\tcrossDomain: true,
\t\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\t\$('#button-payment-address').button('loading');
\t\t\t\t\t},
\t\t\t\t\tcomplete: function() {
\t\t\t\t\t\t\$('#button-payment-address').button('reset');
\t\t\t\t\t},
\t\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\thtml = '<option value=\"\">";
        // line 1721
        echo (isset($context["text_select"]) ? $context["text_select"] : null);
        echo "</option>';

\t\t\t\t\t\t\tif (json['payment_methods']) {
\t\t\t\t\t\t\t\tfor (i in json['payment_methods']) {
\t\t\t\t\t\t\t\t\tif (json['payment_methods'][i]['code'] == \$('select[name=\\'payment_method\\'] option:selected').val()) {
\t\t\t\t\t\t\t\t\t\thtml += '<option value=\"' + json['payment_methods'][i]['code'] + '\" selected=\"selected\">' + json['payment_methods'][i]['title'] + '</option>';
\t\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\t\thtml += '<option value=\"' + json['payment_methods'][i]['code'] + '\">' + json['payment_methods'][i]['title'] + '</option>';
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\$('select[name=\\'payment_method\\']').html(html);
\t\t\t\t\t\t}
\t\t\t\t\t},
\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t}
\t\t\t\t}).done(function() {
                    // Refresh products, vouchers and totals
    \t\t\t\t\$('#button-refresh').trigger('click');

    \t\t\t\t// If shipping required got to shipping tab else total tabs
    \t\t\t\tif (\$('select[name=\\'shipping_method\\']').prop('disabled')) {
    \t\t\t\t\t\$('a[href=\\'#tab-total\\']').tab('show');
    \t\t\t\t} else {
    \t\t\t\t\t\$('a[href=\\'#tab-shipping\\']').tab('show');
    \t\t\t\t}
                });
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

// Shipping Address
\$('select[name=\\'shipping_address\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=customer/customer/address&user_token=";
        // line 1761
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&address_id=' + this.value,
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('select[name=\\'shipping_address\\']').prop('disabled', true);
\t\t},
\t\tcomplete: function() {
\t\t\t\$('select[name=\\'shipping_address\\']').prop('disabled', false);
\t\t},
\t\tsuccess: function(json) {
\t\t\t// Reset all fields
\t\t\t\$('#tab-shipping input[type=\\'text\\'], #tab-shipping input[type=\\'text\\'], #tab-shipping textarea').val('');
\t\t\t\$('#tab-shipping select option').not('#tab-shipping select[name=\\'shipping_address\\']').removeAttr('selected');
\t\t\t\$('#tab-shipping input[type=\\'checkbox\\'], #tab-shipping input[type=\\'radio\\']').removeAttr('checked');

\t\t\t\$('#tab-shipping input[name=\\'firstname\\']').val(json['firstname']);
\t\t\t\$('#tab-shipping input[name=\\'lastname\\']').val(json['lastname']);
\t\t\t\$('#tab-shipping input[name=\\'company\\']').val(json['company']);
\t\t\t\$('#tab-shipping input[name=\\'address_1\\']').val(json['address_1']);
\t\t\t\$('#tab-shipping input[name=\\'address_2\\']').val(json['address_2']);
\t\t\t\$('#tab-shipping input[name=\\'city\\']').val(json['city']);
\t\t\t\$('#tab-shipping input[name=\\'postcode\\']').val(json['postcode']);
\t\t\t\$('#tab-shipping select[name=\\'country_id\\']').val(json['country_id']);

\t\t\tshipping_zone_id = json['zone_id'];

\t\t\tfor (i in json['custom_field']) {
\t\t\t\t\$('#tab-shipping select[name=\\'custom_field[' + i + ']\\']').val(json['custom_field'][i]);
\t\t\t\t\$('#tab-shipping textarea[name=\\'custom_field[' + i + ']\\']').val(json['custom_field'][i]);
\t\t\t\t\$('#tab-shipping input[name^=\\'custom_field[' + i + ']\\'][type=\\'text\\']').val(json['custom_field'][i]);
\t\t\t\t\$('#tab-shipping input[name^=\\'custom_field[' + i + ']\\'][type=\\'hidden\\']').val(json['custom_field'][i]);
\t\t\t\t\$('#tab-shipping input[name^=\\'custom_field[' + i + ']\\'][type=\\'radio\\'][value=\\'' + json['custom_field'][i] + '\\']').prop('checked', true);
\t\t\t\t\$('#tab-shipping input[name^=\\'custom_field[' + i + ']\\'][type=\\'checkbox\\'][value=\\'' + json['custom_field'][i] + '\\']').prop('checked', true);

\t\t\t\tif (json['custom_field'][i] instanceof Array) {
\t\t\t\t\tfor (j = 0; j < json['custom_field'][i].length; j++) {
\t\t\t\t\t\t\$('#tab-shipping input[name^=\\'custom_field[' + i + ']\\'][type=\\'checkbox\\'][value=\\'' + json['custom_field'][i][j] + '\\']').prop('checked', true);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t\t\t\$('#tab-shipping select[name=\\'country_id\\']').trigger('change');
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

var shipping_zone_id = '";
        // line 1809
        echo (isset($context["shipping_zone_id"]) ? $context["shipping_zone_id"] : null);
        echo "';

\$('#tab-shipping select[name=\\'country_id\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=localisation/country/country&user_token=";
        // line 1813
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&country_id=' + this.value,
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#tab-shipping select[name=\\'country_id\\']').prop('disabled', true);
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#tab-shipping select[name=\\'country_id\\']').prop('disabled', false);
\t\t},
\t\tsuccess: function(json) {
\t\t\tif (json['postcode_required'] == '1') {
\t\t\t\t\$('#tab-shipping input[name=\\'postcode\\']').closest('.form-group').addClass('required');
\t\t\t} else {
\t\t\t\t\$('#tab-shipping input[name=\\'postcode\\']').closest('.form-group').removeClass('required');
\t\t\t}

\t\t\thtml = '<option value=\"\">";
        // line 1828
        echo (isset($context["text_select"]) ? $context["text_select"] : null);
        echo "</option>';

\t\t\tif (json['zone'] && json['zone'] != '') {
\t\t\t\tfor (i = 0; i < json['zone'].length; i++) {
        \t\t\thtml += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

\t\t\t\t\tif (json['zone'][i]['zone_id'] == shipping_zone_id) {
\t      \t\t\t\thtml += ' selected=\"selected\"';
\t    \t\t\t}

\t    \t\t\thtml += '>' + json['zone'][i]['name'] + '</option>';
\t\t\t\t}
\t\t\t} else {
\t\t\t\thtml += '<option value=\"0\" selected=\"selected\">";
        // line 1841
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>';
\t\t\t}

\t\t\t\$('#tab-shipping select[name=\\'zone_id\\']').html(html);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('#tab-shipping select[name=\\'country_id\\']').trigger('change');

\$('#button-shipping-address').on('click', function() {
\t\$.ajax({
\t\turl: '";
        // line 1856
        echo (isset($context["catalog"]) ? $context["catalog"] : null);
        echo "index.php?route=api/shipping/address&api_token=";
        echo (isset($context["api_token"]) ? $context["api_token"] : null);
        echo "&store_id=' + \$('select[name=\\'store_id\\'] option:selected').val(),
\t\ttype: 'post',
\t\tdata: \$('#tab-shipping input[type=\\'text\\'], #tab-shipping input[type=\\'hidden\\'], #tab-shipping input[type=\\'radio\\']:checked, #tab-shipping input[type=\\'checkbox\\']:checked, #tab-shipping select, #tab-shipping textarea'),
\t\tdataType: 'json',
\t\tcrossDomain: true,
\t\tbeforeSend: function() {
\t\t\t\$('#button-shipping-address').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-shipping-address').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();
\t\t\t\$('.form-group').removeClass('has-error');

\t\t\t// Check for errors
\t\t\tif (json['error']) {
\t\t\t\tif (json['error']['warning']) {
\t\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t}

\t\t\t\tfor (i in json['error']) {
\t\t\t\t\tvar element = \$('#input-shipping-' + i.replace('_', '-'));

\t\t\t\t\tif (\$(element).parent().hasClass('input-group')) {
\t\t\t\t\t\t\$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t} else {
\t\t\t\t\t\t\$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('.text-danger').parentsUntil('.form-group').parent().addClass('has-error');
\t\t\t} else {
\t\t\t\t// Shipping Methods
\t\t\t\tvar request = \$.ajax({
\t\t\t\t\turl: '";
        // line 1892
        echo (isset($context["catalog"]) ? $context["catalog"] : null);
        echo "index.php?route=api/shipping/methods&api_token=";
        echo (isset($context["api_token"]) ? $context["api_token"] : null);
        echo "&store_id=' + \$('select[name=\\'store_id\\'] option:selected').val(),
\t\t\t\t\tdataType: 'json',
\t\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\t\$('#button-shipping-address').button('loading');
\t\t\t\t\t},
\t\t\t\t\tcomplete: function() {
\t\t\t\t\t\t\$('#button-shipping-address').button('reset');
\t\t\t\t\t},
\t\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t// Shipping Methods
\t\t\t\t\t\t\thtml = '<option value=\"\">";
        // line 1905
        echo (isset($context["text_select"]) ? $context["text_select"] : null);
        echo "</option>';

\t\t\t\t\t\t\tif (json['shipping_methods']) {
\t\t\t\t\t\t\t\tfor (i in json['shipping_methods']) {
\t\t\t\t\t\t\t\t\thtml += '<optgroup label=\"' + json['shipping_methods'][i]['title'] + '\">';

\t\t\t\t\t\t\t\t\tif (!json['shipping_methods'][i]['error']) {
\t\t\t\t\t\t\t\t\t\tfor (j in json['shipping_methods'][i]['quote']) {
\t\t\t\t\t\t\t\t\t\t\tif (json['shipping_methods'][i]['quote'][j]['code'] == \$('select[name=\\'shipping_method\\'] option:selected').val()) {
\t\t\t\t\t\t\t\t\t\t\t\thtml += '<option value=\"' + json['shipping_methods'][i]['quote'][j]['code'] + '\" selected=\"selected\">' + json['shipping_methods'][i]['quote'][j]['title'] + ' - ' + json['shipping_methods'][i]['quote'][j]['text'] + '</option>';
\t\t\t\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\t\t\t\thtml += '<option value=\"' + json['shipping_methods'][i]['quote'][j]['code'] + '\">' + json['shipping_methods'][i]['quote'][j]['title'] + ' - ' + json['shipping_methods'][i]['quote'][j]['text'] + '</option>';
\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\t\thtml += '<option value=\"\" style=\"color: #F00;\" disabled=\"disabled\">' + json['shipping_method'][i]['error'] + '</option>';
\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\thtml += '</optgroup>';
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\$('select[name=\\'shipping_method\\']').html(html);
\t\t\t\t\t\t}
\t\t\t\t\t},
\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t}
\t\t\t\t}).done(function() {
\t\t\t\t    // Refresh products, vouchers and totals
\t\t\t\t    \$('#button-refresh').trigger('click');

                    \$('a[href=\\'#tab-total\\']').tab('show');
                });
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

// Shipping Method
\$('#button-shipping-method').on('click', function() {
\t\$.ajax({
\t\turl: '";
        // line 1950
        echo (isset($context["catalog"]) ? $context["catalog"] : null);
        echo "index.php?route=api/shipping/method&api_token=";
        echo (isset($context["api_token"]) ? $context["api_token"] : null);
        echo "&store_id=' + \$('select[name=\\'store_id\\'] option:selected').val(),
\t\ttype: 'post',
\t\tdata: 'shipping_method=' + \$('select[name=\\'shipping_method\\'] option:selected').val(),
\t\tdataType: 'json',
\t\tcrossDomain: true,
\t\tbeforeSend: function() {
\t\t\t\$('#button-shipping-method').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-shipping-method').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();
\t\t\t\$('.form-group').removeClass('has-error');

\t\t\tif (json['error']) {
\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('select[name=\\'shipping_method\\']').closest('.form-group').addClass('has-error');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t// Refresh products, vouchers and totals
\t\t\t\t\$('#button-refresh').trigger('click');
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

// Payment Method
\$('#button-payment-method').on('click', function() {
\t\$.ajax({
\t\turl: '";
        // line 1988
        echo (isset($context["catalog"]) ? $context["catalog"] : null);
        echo "index.php?route=api/payment/method&api_token=";
        echo (isset($context["api_token"]) ? $context["api_token"] : null);
        echo "&store_id=' + \$('select[name=\\'store_id\\'] option:selected').val(),
\t\ttype: 'post',
\t\tdata: 'payment_method=' + \$('select[name=\\'payment_method\\'] option:selected').val(),
\t\tdataType: 'json',
\t\tcrossDomain: true,
\t\tbeforeSend: function() {
\t\t\t\$('#button-payment-method').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-payment-method').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();
\t\t\t\$('.form-group').removeClass('has-error');

\t\t\tif (json['error']) {
\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('select[name=\\'payment_method\\']').closest('.form-group').addClass('has-error');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t// Refresh products, vouchers and totals
\t\t\t\t\$('#button-refresh').trigger('click');
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

// Coupon
\$('#button-coupon').on('click', function() {
\t\$.ajax({
\t\turl: '";
        // line 2026
        echo (isset($context["catalog"]) ? $context["catalog"] : null);
        echo "index.php?route=api/coupon&api_token=";
        echo (isset($context["api_token"]) ? $context["api_token"] : null);
        echo "&store_id=' + \$('select[name=\\'store_id\\'] option:selected').val(),
\t\ttype: 'post',
\t\tdata: 'coupon=' + \$('input[name=\\'coupon\\']').val(),
\t\tdataType: 'json',
\t\tcrossDomain: true,
\t\tbeforeSend: function() {
\t\t\t\$('#button-coupon').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-coupon').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();
\t\t\t\$('.form-group').removeClass('has-error');

\t\t\tif (json['error']) {
\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('input[name=\\'coupon\\']').closest('.form-group').addClass('has-error');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t// Refresh products, vouchers and totals
\t\t\t\t\$('#button-refresh').trigger('click');
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

// Voucher
\$('#button-voucher').on('click', function() {
\t\$.ajax({
\t\turl: '";
        // line 2064
        echo (isset($context["catalog"]) ? $context["catalog"] : null);
        echo "index.php?route=api/voucher&api_token=";
        echo (isset($context["api_token"]) ? $context["api_token"] : null);
        echo "&store_id=' + \$('select[name=\\'store_id\\'] option:selected').val(),
\t\ttype: 'post',
\t\tdata: 'voucher=' + \$('input[name=\\'voucher\\']').val(),
\t\tdataType: 'json',
\t\tcrossDomain: true,
\t\tbeforeSend: function() {
\t\t\t\$('#button-voucher').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-voucher').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();
\t\t\t\$('.form-group').removeClass('has-error');

\t\t\tif (json['error']) {
\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('input[name=\\'voucher\\']').closest('.form-group').addClass('has-error');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t// Refresh products, vouchers and totals
\t\t\t\t\$('#button-refresh').trigger('click');
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

// Reward
\$('#button-reward').on('click', function() {
\t\$.ajax({
\t\turl: '";
        // line 2102
        echo (isset($context["catalog"]) ? $context["catalog"] : null);
        echo "index.php?route=api/reward&api_token=";
        echo (isset($context["api_token"]) ? $context["api_token"] : null);
        echo "&store_id=' + \$('select[name=\\'store_id\\'] option:selected').val(),
\t\ttype: 'post',
\t\tdata: 'reward=' + \$('input[name=\\'reward\\']').val(),
\t\tdataType: 'json',
\t\tcrossDomain: true,
\t\tbeforeSend: function() {
\t\t\t\$('#button-reward').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-reward').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();
\t\t\t\$('.form-group').removeClass('has-error');

\t\t\tif (json['error']) {
\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('input[name=\\'reward\\']').closest('.form-group').addClass('has-error');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t// Refresh products, vouchers and totals
\t\t\t\t\$('#button-refresh').trigger('click');
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

// Affiliate
\$('input[name=\\'affiliate\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=customer/customer/autocomplete&user_token=";
        // line 2141
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_affiliate=1&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tjson.unshift({
\t\t\t\t\tcustomer_id: 0,
\t\t\t\t\tname: '";
        // line 2146
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "'
\t\t\t\t});

\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['customer_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'affiliate\\']').val(item['label']);
\t\t\$('input[name=\\'affiliate_id\\']').val(item['value']);
\t}
});

// Checkout
\$('#button-save').on('click', function() {
\tif (\$('input[name=\\'order_id\\']').val() == 0) {
\t\tvar url = '";
        // line 2167
        echo (isset($context["catalog"]) ? $context["catalog"] : null);
        echo "index.php?route=api/order/add&api_token=";
        echo (isset($context["api_token"]) ? $context["api_token"] : null);
        echo "&store_id=' + \$('select[name=\\'store_id\\'] option:selected').val();
\t} else {
\t\tvar url = '";
        // line 2169
        echo (isset($context["catalog"]) ? $context["catalog"] : null);
        echo "index.php?route=api/order/edit&api_token=";
        echo (isset($context["api_token"]) ? $context["api_token"] : null);
        echo "&store_id=' + \$('select[name=\\'store_id\\'] option:selected').val() + '&order_id=' + \$('input[name=\\'order_id\\']').val();
\t}

\t\$.ajax({
\t\turl: url,
\t\ttype: 'post',
\t\tdata: \$('select[name=\\'payment_method\\'] option:selected, select[name=\\'shipping_method\\'] option:selected,  #tab-total select[name=\\'order_status_id\\'], #tab-total select, textarea[name=\\'comment\\'], input[name=\\'affiliate_id\\']'),
\t\tdataType: 'json',
\t\tcrossDomain: true,
\t\tbeforeSend: function() {
\t\t\t\$('#button-save').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-save').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();

\t\t\tif (json['error']) {
\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '  <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
            }

\t\t\tif (json['order_id']) {
\t\t\t\t\$('input[name=\\'order_id\\']').val(json['order_id']);
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('#content').delegate('button[id^=\\'button-upload\\'], button[id^=\\'button-custom-field\\'], button[id^=\\'button-payment-custom-field\\'], button[id^=\\'button-shipping-custom-field\\']', 'click', function() {
\tvar node = this;

\t\$('#form-upload').remove();

\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

\t\$('#form-upload input[name=\\'file\\']').trigger('click');

\tif (typeof timer != 'undefined') {
    \tclearInterval(timer);
\t}

\ttimer = setInterval(function() {
\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\tclearInterval(timer);

\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=tool/upload/upload&user_token=";
        // line 2223
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "',
\t\t\t\ttype: 'post',
\t\t\t\tdataType: 'json',
\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\tcache: false,
\t\t\t\tcontentType: false,
\t\t\t\tprocessData: false,
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$(node).button('loading');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$(node).button('reset');
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\$(node).parent().find('.text-danger').remove();

\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$(node).parent().find('input[type=\\'hidden\\']').after('<div class=\"text-danger\">' + json['error'] + '</div>');
\t\t\t\t\t}

\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\talert(json['success']);
\t\t\t\t\t}

\t\t\t\t\tif (json['code']) {
\t\t\t\t\t\t\$(node).parent().find('input[type=\\'hidden\\']').val(json['code']);
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}
\t}, 500);
});

\$('.date').datetimepicker({
\tlanguage: '";
        // line 2260
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\tpickTime: false
});

\$('.datetime').datetimepicker({
\tlanguage: '";
        // line 2265
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\tpickDate: true,
\tpickTime: true
});

\$('.time').datetimepicker({
\tlanguage: '";
        // line 2271
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\tpickDate: false
});
//--></script>
  <script type=\"text/javascript\"><!--
// Sort the custom fields
\$('#tab-customer .form-group[data-sort]').detach().each(function() {
\tif (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#tab-customer .form-group').length) {
\t\t\$('#tab-customer .form-group').eq(\$(this).attr('data-sort')).before(this);
\t}

\tif (\$(this).attr('data-sort') > \$('#tab-customer .form-group').length) {
\t\t\$('#tab-customer .form-group:last').after(this);
\t}

\tif (\$(this).attr('data-sort') < -\$('#tab-customer .form-group').length) {
\t\t\$('#tab-customer .form-group:first').before(this);
\t}
});

// Sort the custom fields
\$('#tab-payment .form-group[data-sort]').detach().each(function() {
\tif (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#tab-payment .form-group').length) {
\t\t\$('#tab-payment .form-group').eq(\$(this).attr('data-sort')).before(this);
\t}

\tif (\$(this).attr('data-sort') > \$('#tab-payment .form-group').length) {
\t\t\$('#tab-payment .form-group:last').after(this);
\t}

\tif (\$(this).attr('data-sort') < -\$('#tab-payment .form-group').length) {
\t\t\$('#tab-payment .form-group:first').before(this);
\t}
});

\$('#tab-shipping .form-group[data-sort]').detach().each(function() {
\tif (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#tab-shipping .form-group').length) {
\t\t\$('#tab-shipping .form-group').eq(\$(this).attr('data-sort')).before(this);
\t}

\tif (\$(this).attr('data-sort') > \$('#tab-shipping .form-group').length) {
\t\t\$('#tab-shipping .form-group:last').after(this);
\t}

\tif (\$(this).attr('data-sort') < -\$('#tab-shipping .form-group').length) {
\t\t\$('#tab-shipping .form-group:first').before(this);
\t}
});

// Add all products to the cart using the api
\$('#button-refresh').on('click', function() {
\t\$.ajax({
\t\turl: '";
        // line 2323
        echo (isset($context["catalog"]) ? $context["catalog"] : null);
        echo "index.php?route=api/cart/products&api_token=";
        echo (isset($context["api_token"]) ? $context["api_token"] : null);
        echo "&store_id=' + \$('select[name=\\'store_id\\'] option:selected').val(),
\t\tdataType: 'json',
\t\tcrossDomain: true,
\t\tbeforeSend: function() {
\t\t\t\$('#button-refresh').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-refresh').button('reset');
\t\t},\t\t
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();

\t\t\t// Check for errors
\t\t\tif (json['error']) {
\t\t\t\tif (json['error']['warning']) {
\t\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t}

\t\t\t\tif (json['error']['stock']) {
\t\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['stock'] + '</div>');
\t\t\t\t}

\t\t\t\tif (json['error']['minimum']) {
\t\t\t\t\tfor (i in json['error']['minimum']) {
\t\t\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['minimum'][i] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t\t\tvar shipping = false;

\t\t\thtml = '';

\t\t\tif (json['products'].length) {
\t\t\t\tfor (i = 0; i < json['products'].length; i++) {
\t\t\t\t\tproduct = json['products'][i];

\t\t\t\t\thtml += '<tr>';
\t\t\t\t\thtml += '  <td class=\"text-left\">' + product['name'] + ' ' + (!product['stock'] ? '<span class=\"text-danger\">***</span>' : '') + '<br />';
\t\t\t\t\thtml += '  <input type=\"hidden\" name=\"product[' + i + '][product_id]\" value=\"' + product['product_id'] + '\" />';

\t\t\t\t\tif (product['option']) {
\t\t\t\t\t\tfor (j = 0; j < product['option'].length; j++) {
\t\t\t\t\t\t\toption = product['option'][j];

\t\t\t\t\t\t\thtml += '  - <small>' + option['name'] + ': ' + option['value'] + '</small><br />';

\t\t\t\t\t\t\tif (option['type'] == 'select' || option['type'] == 'radio' || option['type'] == 'image') {
\t\t\t\t\t\t\t\thtml += '<input type=\"hidden\" name=\"product[' + i + '][option][' + option['product_option_id'] + ']\" value=\"' + option['product_option_value_id'] + '\" />';
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\tif (option['type'] == 'checkbox') {
\t\t\t\t\t\t\t\thtml += '<input type=\"hidden\" name=\"product[' + i + '][option][' + option['product_option_id'] + '][]\" value=\"' + option['product_option_value_id'] + '\" />';
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\tif (option['type'] == 'text' || option['type'] == 'textarea' || option['type'] == 'file' || option['type'] == 'date' || option['type'] == 'datetime' || option['type'] == 'time') {
\t\t\t\t\t\t\t\thtml += '<input type=\"hidden\" name=\"product[' + i + '][option][' + option['product_option_id'] + ']\" value=\"' + option['value'] + '\" />';
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\thtml += '</td>';
\t\t\t\t\thtml += '  <td class=\"text-left\">' + product['model'] + '</td>';
          //CIS
            ";
        // line 2387
        if (((isset($context["shipping_code"]) ? $context["shipping_code"] : null) == "my_parcel.my_parcel")) {
            // line 2388
            echo "          html += '  <td class=\"text-left\"><div class=\"input-group btn-block\" style=\"max-width: 200px;\"><input type=\"text\" name=\"product[' + i + '][squantity]\" value=\"' + product['squantity'] + '\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" data-toggle=\"tooltip\" title=\"";
            echo (isset($context["button_refresh"]) ? $context["button_refresh"] : null);
            echo "\" data-loading-text=\"";
            echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-refresh\"></i></button></span></div><input type=\"hidden\" name=\"product[' + i + '][squantity1]\" value=\"' + product['squantity'] + '\" class=\"form-control\" /></td>';
          ";
        }
        // line 2390
        echo "\t\t\t\t\thtml += '  <td class=\"text-right\"><div class=\"input-group btn-block\" style=\"max-width: 200px;\"><input type=\"text\" name=\"product[' + i + '][quantity]\" value=\"' + product['quantity'] + '\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_refresh"]) ? $context["button_refresh"] : null);
        echo "\" data-loading-text=\"";
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-refresh\"></i></button></span></div></td>';
                    html += '  <td class=\"text-right\">' + product['price'] + '</td>';
\t\t\t\t\thtml += '  <td class=\"text-right\">' + product['total'] + '</td>';
\t\t\t\t\thtml += '  <td class=\"text-center\" style=\"width: 3px;\"><button type=\"button\" value=\"' + product['cart_id'] + '\" data-toggle=\"tooltip\" title=\"";
        // line 2393
        echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
        echo "\" data-loading-text=\"";
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\t\t\t\t\thtml += '</tr>';

\t\t\t\t\tif (product['shipping'] != 0) {
\t\t\t\t\t\tshipping = true;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t\t\tif (!shipping) {
\t\t\t\t\$('select[name=\\'shipping_method\\'] option').removeAttr('selected');
\t\t\t\t\$('select[name=\\'shipping_method\\']').prop('disabled', true);
\t\t\t\t\$('#button-shipping-method').prop('disabled', true);
\t\t\t} else {
\t\t\t\t\$('select[name=\\'shipping_method\\']').prop('disabled', false);
\t\t\t\t\$('#button-shipping-method').prop('disabled', false);
\t\t\t}

\t\t\tif (json['vouchers'].length) {
\t\t\t\tfor (i in json['vouchers']) {
\t\t\t\t\tvoucher = json['vouchers'][i];

\t\t\t\t\thtml += '<tr>';
\t\t\t\t\thtml += '  <td class=\"text-left\">' + voucher['description'];
                    html += '    <input type=\"hidden\" name=\"voucher[' + i + '][code]\" value=\"' + voucher['code'] + '\" />';
\t\t\t\t\thtml += '    <input type=\"hidden\" name=\"voucher[' + i + '][description]\" value=\"' + voucher['description'] + '\" />';
                    html += '    <input type=\"hidden\" name=\"voucher[' + i + '][from_name]\" value=\"' + voucher['from_name'] + '\" />';
                    html += '    <input type=\"hidden\" name=\"voucher[' + i + '][from_email]\" value=\"' + voucher['from_email'] + '\" />';
                    html += '    <input type=\"hidden\" name=\"voucher[' + i + '][to_name]\" value=\"' + voucher['to_name'] + '\" />';
                    html += '    <input type=\"hidden\" name=\"voucher[' + i + '][to_email]\" value=\"' + voucher['to_email'] + '\" />';
                    html += '    <input type=\"hidden\" name=\"voucher[' + i + '][voucher_theme_id]\" value=\"' + voucher['voucher_theme_id'] + '\" />';
                    html += '    <input type=\"hidden\" name=\"voucher[' + i + '][message]\" value=\"' + voucher['message'] + '\" />';
                    html += '    <input type=\"hidden\" name=\"voucher[' + i + '][amount]\" value=\"' + voucher['amount'] + '\" />';
\t\t\t\t\thtml += '  </td>';
\t\t\t\t\thtml += '  <td class=\"text-left\"></td>';
\t\t\t\t\thtml += '  <td class=\"text-right\">1</td>';
\t\t\t\t\thtml += '  <td class=\"text-right\">' + voucher['price'] + '</td>';
\t\t\t\t\thtml += '  <td class=\"text-right\">' + voucher['price'] + '</td>';
\t\t\t\t\thtml += '  <td class=\"text-center\" style=\"width: 3px;\"><button type=\"button\" value=\"' + voucher['code'] + '\" data-toggle=\"tooltip\" title=\"";
        // line 2431
        echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
        echo "\" data-loading-text=\"";
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\t\t\t\t\thtml += '</tr>';
\t\t\t\t}
\t\t\t}

\t\t\tif (!json['products'].length && !json['vouchers'].length) {
\t\t\t\thtml += '<tr>';
\t\t\t\thtml += '  <td colspan=\"6\" class=\"text-center\">";
        // line 2438
        echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
        echo "</td>';
\t\t\t\thtml += '</tr>';
\t\t\t}

\t\t\t\$('#cart').html(html);

\t\t\t// Totals
\t\t\thtml = '';

\t\t\tif (json['products'].length) {
\t\t\t\tfor (i = 0; i < json['products'].length; i++) {
\t\t\t\t\tproduct = json['products'][i];

\t\t\t\t\thtml += '<tr>';
\t\t\t\t\thtml += '  <td class=\"text-left\">' + product['name'] + ' ' + (!product['stock'] ? '<span class=\"text-danger\">***</span>' : '') + '<br />';

\t\t\t\t\tif (product['option']) {
\t\t\t\t\t\tfor (j = 0; j < product['option'].length; j++) {
\t\t\t\t\t\t\toption = product['option'][j];

\t\t\t\t\t\t\thtml += '  - <small>' + option['name'] + ': ' + option['value'] + '</small><br />';
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\thtml += '  </td>';
\t\t\t\t\thtml += '  <td class=\"text-left\">' + product['model'] + '</td>';
          html += '  <td class=\"text-left\">' + product['quantity'] + '</td>';
\t\t\t\t\thtml += '  <td class=\"text-right\">' + product['price'] + '</td>';
\t\t\t\t\thtml += '  <td class=\"text-right\">' + product['total'] + '</td>';
\t\t\t\t\thtml += '</tr>';
\t\t\t\t}
\t\t\t}

\t\t\tif (json['vouchers'].length) {
\t\t\t\tfor (i in json['vouchers']) {
\t\t\t\t\tvoucher = json['vouchers'][i];

\t\t\t\t\thtml += '<tr>';
\t\t\t\t\thtml += '  <td class=\"text-left\">' + voucher['description'] + '</td>';
\t\t\t\t\thtml += '  <td class=\"text-left\"></td>';
\t\t\t\t\thtml += '  <td class=\"text-right\">1</td>';
\t\t\t\t\thtml += '  <td class=\"text-right\">' + voucher['amount'] + '</td>';
\t\t\t\t\thtml += '  <td class=\"text-right\">' + voucher['amount'] + '</td>';
\t\t\t\t\thtml += '</tr>';
\t\t\t\t}
\t\t\t}

\t\t\tif (json['totals'].length) {
\t\t\t\tfor (i in json['totals']) {
\t\t\t\t\ttotal = json['totals'][i];

\t\t\t\t\thtml += '<tr>';
\t\t\t\t\thtml += '  <td class=\"text-right\" colspan=\"4\">' + total['title'] + ':</td>';
\t\t\t\t\thtml += '  <td class=\"text-right\">' + total['text'] + '</td>';
\t\t\t\t\thtml += '</tr>';
\t\t\t\t}
\t\t\t}

\t\t\tif (!json['totals'].length && !json['products'].length && !json['vouchers'].length) {
\t\t\t\thtml += '<tr>';
\t\t\t\thtml += '  <td colspan=\"5\" class=\"text-center\">";
        // line 2498
        echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
        echo "</td>';
\t\t\t\thtml += '</tr>';
\t\t\t}

\t\t\t\$('#total').html(html);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});
//--></script></div>
";
        // line 2510
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "sale/order_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  4425 => 2510,  4410 => 2498,  4347 => 2438,  4335 => 2431,  4292 => 2393,  4283 => 2390,  4275 => 2388,  4273 => 2387,  4204 => 2323,  4149 => 2271,  4140 => 2265,  4132 => 2260,  4092 => 2223,  4033 => 2169,  4026 => 2167,  4002 => 2146,  3994 => 2141,  3950 => 2102,  3907 => 2064,  3864 => 2026,  3821 => 1988,  3778 => 1950,  3730 => 1905,  3712 => 1892,  3671 => 1856,  3653 => 1841,  3637 => 1828,  3619 => 1813,  3612 => 1809,  3561 => 1761,  3518 => 1721,  3500 => 1708,  3459 => 1672,  3441 => 1657,  3425 => 1644,  3407 => 1629,  3400 => 1625,  3349 => 1577,  3306 => 1539,  3268 => 1506,  3249 => 1490,  3206 => 1452,  3149 => 1400,  3135 => 1389,  3126 => 1383,  3118 => 1378,  3080 => 1345,  3040 => 1308,  2987 => 1258,  2960 => 1234,  2947 => 1224,  2923 => 1203,  2877 => 1162,  2846 => 1136,  2806 => 1101,  2777 => 1075,  2760 => 1061,  2700 => 1004,  2696 => 1003,  2688 => 998,  2649 => 964,  2628 => 946,  2622 => 945,  2616 => 942,  2607 => 936,  2603 => 935,  2598 => 933,  2591 => 929,  2586 => 927,  2579 => 923,  2576 => 922,  2570 => 921,  2562 => 919,  2554 => 917,  2551 => 916,  2547 => 915,  2541 => 912,  2531 => 907,  2524 => 905,  2518 => 902,  2508 => 897,  2501 => 895,  2495 => 892,  2485 => 887,  2480 => 885,  2474 => 882,  2464 => 877,  2460 => 875,  2452 => 873,  2450 => 872,  2446 => 871,  2439 => 867,  2429 => 862,  2425 => 860,  2417 => 858,  2415 => 857,  2411 => 856,  2404 => 852,  2399 => 850,  2390 => 844,  2382 => 839,  2378 => 838,  2374 => 837,  2370 => 836,  2366 => 835,  2352 => 826,  2346 => 823,  2342 => 821,  2336 => 820,  2333 => 819,  2317 => 812,  2309 => 809,  2302 => 808,  2299 => 807,  2283 => 800,  2275 => 797,  2268 => 796,  2265 => 795,  2249 => 788,  2241 => 785,  2234 => 784,  2231 => 783,  2220 => 779,  2212 => 778,  2207 => 776,  2200 => 775,  2197 => 774,  2184 => 770,  2177 => 768,  2170 => 767,  2167 => 766,  2154 => 762,  2147 => 760,  2140 => 759,  2137 => 758,  2131 => 754,  2124 => 752,  2119 => 750,  2113 => 749,  2110 => 748,  2105 => 746,  2099 => 745,  2096 => 744,  2094 => 743,  2091 => 742,  2087 => 741,  2083 => 740,  2078 => 738,  2071 => 737,  2068 => 736,  2062 => 732,  2055 => 730,  2050 => 728,  2044 => 727,  2041 => 726,  2036 => 724,  2030 => 723,  2027 => 722,  2025 => 721,  2022 => 720,  2018 => 719,  2014 => 718,  2009 => 716,  2002 => 715,  1999 => 714,  1993 => 710,  1987 => 709,  1979 => 707,  1971 => 705,  1968 => 704,  1964 => 703,  1960 => 702,  1954 => 701,  1947 => 699,  1940 => 698,  1937 => 697,  1934 => 696,  1930 => 695,  1921 => 689,  1915 => 685,  1909 => 684,  1901 => 682,  1893 => 680,  1890 => 679,  1886 => 678,  1882 => 677,  1876 => 674,  1869 => 670,  1864 => 668,  1857 => 664,  1852 => 662,  1845 => 658,  1840 => 656,  1833 => 652,  1828 => 650,  1821 => 646,  1816 => 644,  1809 => 640,  1804 => 638,  1797 => 634,  1792 => 632,  1786 => 628,  1767 => 626,  1763 => 625,  1759 => 624,  1753 => 621,  1742 => 615,  1736 => 612,  1732 => 610,  1726 => 609,  1723 => 608,  1707 => 601,  1699 => 598,  1692 => 597,  1689 => 596,  1673 => 589,  1665 => 586,  1658 => 585,  1655 => 584,  1639 => 577,  1631 => 574,  1624 => 573,  1621 => 572,  1610 => 568,  1602 => 567,  1597 => 565,  1590 => 564,  1587 => 563,  1574 => 559,  1567 => 557,  1560 => 556,  1557 => 555,  1544 => 551,  1537 => 549,  1530 => 548,  1527 => 547,  1521 => 543,  1514 => 541,  1509 => 539,  1503 => 538,  1500 => 537,  1495 => 535,  1489 => 534,  1486 => 533,  1484 => 532,  1481 => 531,  1477 => 530,  1473 => 529,  1468 => 527,  1461 => 526,  1458 => 525,  1452 => 521,  1445 => 519,  1440 => 517,  1434 => 516,  1431 => 515,  1426 => 513,  1420 => 512,  1417 => 511,  1415 => 510,  1412 => 509,  1408 => 508,  1404 => 507,  1399 => 505,  1392 => 504,  1389 => 503,  1383 => 499,  1377 => 498,  1369 => 496,  1361 => 494,  1358 => 493,  1354 => 492,  1350 => 491,  1344 => 490,  1337 => 488,  1330 => 487,  1327 => 486,  1324 => 485,  1320 => 484,  1311 => 478,  1305 => 474,  1299 => 473,  1291 => 471,  1283 => 469,  1280 => 468,  1276 => 467,  1272 => 466,  1266 => 463,  1259 => 459,  1254 => 457,  1247 => 453,  1242 => 451,  1235 => 447,  1230 => 445,  1223 => 441,  1218 => 439,  1211 => 435,  1206 => 433,  1199 => 429,  1194 => 427,  1187 => 423,  1182 => 421,  1176 => 417,  1157 => 415,  1153 => 414,  1149 => 413,  1143 => 410,  1134 => 404,  1128 => 401,  1116 => 394,  1108 => 389,  1103 => 387,  1094 => 381,  1088 => 377,  1077 => 375,  1073 => 374,  1067 => 371,  1058 => 365,  1049 => 359,  1040 => 353,  1031 => 347,  1026 => 345,  1016 => 340,  1005 => 332,  995 => 325,  990 => 323,  982 => 318,  978 => 317,  973 => 314,  966 => 310,  963 => 309,  960 => 308,  954 => 307,  952 => 306,  940 => 299,  934 => 298,  928 => 297,  922 => 296,  916 => 295,  910 => 294,  904 => 293,  898 => 292,  892 => 291,  886 => 290,  882 => 289,  879 => 288,  874 => 287,  871 => 286,  865 => 285,  863 => 284,  853 => 279,  849 => 278,  846 => 277,  838 => 274,  831 => 273,  829 => 272,  824 => 270,  816 => 269,  806 => 267,  803 => 266,  793 => 264,  790 => 263,  780 => 261,  778 => 260,  771 => 259,  767 => 258,  761 => 257,  757 => 256,  754 => 255,  749 => 254,  746 => 253,  744 => 252,  737 => 248,  733 => 247,  729 => 246,  725 => 245,  722 => 244,  718 => 242,  716 => 241,  711 => 239,  707 => 238,  694 => 230,  691 => 229,  685 => 228,  682 => 227,  666 => 220,  658 => 217,  651 => 216,  648 => 215,  632 => 208,  624 => 205,  617 => 204,  614 => 203,  598 => 196,  590 => 193,  583 => 192,  580 => 191,  569 => 187,  563 => 186,  558 => 184,  551 => 183,  548 => 182,  535 => 178,  528 => 176,  521 => 175,  518 => 174,  505 => 170,  498 => 168,  491 => 167,  488 => 166,  482 => 162,  475 => 160,  470 => 158,  464 => 157,  461 => 156,  456 => 154,  450 => 153,  447 => 152,  445 => 151,  442 => 150,  438 => 149,  434 => 148,  429 => 146,  422 => 145,  419 => 144,  413 => 140,  406 => 138,  401 => 136,  395 => 135,  392 => 134,  387 => 132,  381 => 131,  378 => 130,  376 => 129,  373 => 128,  369 => 127,  365 => 126,  360 => 124,  353 => 123,  350 => 122,  344 => 118,  338 => 117,  330 => 115,  322 => 113,  319 => 112,  315 => 111,  311 => 110,  305 => 109,  298 => 107,  291 => 106,  288 => 105,  285 => 104,  281 => 103,  275 => 100,  270 => 98,  263 => 94,  258 => 92,  251 => 88,  246 => 86,  239 => 82,  234 => 80,  228 => 76,  222 => 75,  214 => 73,  206 => 71,  203 => 70,  199 => 69,  193 => 66,  186 => 62,  180 => 61,  175 => 59,  169 => 55,  163 => 54,  155 => 52,  147 => 50,  144 => 49,  140 => 48,  134 => 45,  128 => 41,  122 => 40,  114 => 38,  106 => 36,  103 => 35,  99 => 34,  93 => 31,  85 => 26,  81 => 25,  77 => 24,  73 => 23,  69 => 22,  61 => 17,  53 => 11,  42 => 9,  38 => 8,  33 => 6,  27 => 5,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right"><a href="{{ cancel }}" class="btn btn-default"><i class="fa fa-reply"></i> {{ button_cancel }}</a></div>*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid">*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_form }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <form class="form-horizontal">*/
/*           <ul id="order" class="nav nav-tabs nav-justified">*/
/*             <li class="disabled active"><a href="#tab-customer" data-toggle="tab">1. {{ tab_customer }}</a></li>*/
/*             <li class="disabled"><a href="#tab-cart" data-toggle="tab">2. {{ tab_product }}</a></li>*/
/*             <li class="disabled"><a href="#tab-payment" data-toggle="tab">3. {{ tab_payment }}</a></li>*/
/*             <li class="disabled"><a href="#tab-shipping" data-toggle="tab">4. {{ tab_shipping }}</a></li>*/
/*             <li class="disabled"><a href="#tab-total" data-toggle="tab">5. {{ tab_total }}</a></li>*/
/*           </ul>*/
/*           <div class="tab-content">*/
/*             <div class="tab-pane active" id="tab-customer">*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-store">{{ entry_store }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="store_id" id="input-store" class="form-control">*/
/*                     {% for store in stores %}*/
/*                     {% if store.store_id == store_id %}*/
/*                     <option value="{{ store.store_id }}" selected="selected">{{ store.name }}</option>*/
/*                     {% else %}*/
/*                     <option value="{{ store.store_id }}">{{ store.name }}</option>*/
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-currency">{{ entry_currency }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="currency" id="input-currency" class="form-control">*/
/*                     {% for currency in currencies %}*/
/*                     {% if currency.code == currency_code %}*/
/*                     <option value="{{ currency.code }}" selected="selected">{{ currency.title }}</option>*/
/*                     {% else %}*/
/*                     <option value="{{ currency.code }}">{{ currency.title }}</option>*/
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-customer">{{ entry_customer }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="customer" value="{{ customer }}" placeholder="{{ entry_customer }}" id="input-customer" class="form-control" />*/
/*                   <input type="hidden" name="customer_id" value="{{ customer_id }}" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-customer-group">{{ entry_customer_group }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="customer_group_id" id="input-customer-group" class="form-control">*/
/*                     {% for customer_group in customer_groups %}*/
/*                     {% if customer_group.customer_group_id == customer_group_id %}*/
/*                     <option value="{{ customer_group.customer_group_id }}" selected="selected">{{ customer_group.name }}</option>*/
/*                     {% else %}*/
/*                     <option value="{{ customer_group.customer_group_id }}">{{ customer_group.name }}</option>*/
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label" for="input-firstname">{{ entry_firstname }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="firstname" value="{{ firstname }}" id="input-firstname" class="form-control" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label" for="input-lastname">{{ entry_lastname }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="lastname" value="{{ lastname }}" id="input-lastname" class="form-control" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label" for="input-email">{{ entry_email }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="email" value="{{ email }}" id="input-email" class="form-control" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label" for="input-telephone">{{ entry_telephone }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="telephone" value="{{ telephone }}" id="input-telephone" class="form-control" />*/
/*                 </div>*/
/*               </div>*/
/*               {% for custom_field in custom_fields %}*/
/*               {% if custom_field.location == 'account' %}*/
/*               {% if custom_field.type == 'select' %}*/
/*               <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 3 }}">*/
/*                 <label class="col-sm-2 control-label" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="custom_field[{{ custom_field.custom_field_id }}]" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control">*/
/*                     <option value="">{{ text_select }}</option>*/
/*                     {% for custom_field_value in custom_field.custom_field_value %}*/
/*                     {% if account_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == account_custom_field[custom_field.custom_field_id] %}*/
/*                     <option value="{{ custom_field_value.custom_field_value_id }}" selected="selected">{{ custom_field_value.name }}</option>*/
/*                     {% else %}*/
/*                     <option value="{{ custom_field_value.custom_field_value_id }}">{{ custom_field_value.name }}</option>*/
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               {% endif %}*/
/*               {% if custom_field.type == 'radio' %}*/
/*               <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 3 }}">*/
/*                 <label class="col-sm-2 control-label">{{ custom_field.name }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <div id="input-custom-field{{ custom_field.custom_field_id }}">*/
/*                     {% for custom_field_value in custom_field.custom_field_value %}*/
/*                     <div class="radio">*/
/*                       {% if account_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == account_custom_field[custom_field.custom_field_id] %}*/
/*                       <label>*/
/*                         <input type="radio" name="custom_field[{{ custom_field.custom_field_id }}]" value="{{ custom_field_value.custom_field_value_id }}" checked="checked" />*/
/*                         {{ custom_field_value.name }}</label>*/
/*                       {% else %}*/
/*                       <label>*/
/*                         <input type="radio" name="custom_field[{{ custom_field.custom_field_id }}]" value="{{ custom_field_value.custom_field_value_id }}" />*/
/*                         {{ custom_field_value.name }}</label>*/
/*                       {% endif %}*/
/*                     </div>*/
/*                     {% endfor %}*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*               {% endif %}*/
/*               {% if custom_field.type == 'checkbox' %}*/
/*               <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 3 }}">*/
/*                 <label class="col-sm-2 control-label">{{ custom_field.name }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <div id="input-custom-field{{ custom_field.custom_field_id }}">*/
/*                     {% for custom_field_value in custom_field.custom_field_value %}*/
/*                     <div class="checkbox">*/
/*                       {% if account_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id in account_custom_field[custom_field.custom_field_id] %}*/
/*                       <label>*/
/*                         <input type="checkbox" name="custom_field[{{ custom_field.custom_field_id }}][]" value="{{ custom_field_value.custom_field_value_id }}" checked="checked" />*/
/*                         {{ custom_field_value.name }}</label>*/
/*                       {% else %}*/
/*                       <label>*/
/*                         <input type="checkbox" name="custom_field[{{ custom_field.custom_field_id }}][]" value="{{ custom_field_value.custom_field_value_id }}" />*/
/*                         {{ custom_field_value.name }}</label>*/
/*                       {% endif %}*/
/*                     </div>*/
/*                     {% endfor %}*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*               {% endif %}*/
/*               {% if custom_field.type == 'text' %}*/
/*               <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 3 }}">*/
/*                 <label class="col-sm-2 control-label" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="custom_field[{{ custom_field.custom_field_id }}]" value="{{ account_custom_field[custom_field.custom_field_id] ? account_custom_field[custom_field.custom_field_id] : custom_field.value }}" placeholder="{{ custom_field.name }}" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*                 </div>*/
/*               </div>*/
/*               {% endif %}*/
/*               {% if custom_field.type == 'textarea' %}*/
/*               <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 3 }}">*/
/*                 <label class="col-sm-2 control-label" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <textarea name="custom_field[{{ custom_field.custom_field_id }}]" rows="5" placeholder="{{ custom_field.name }}" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control">{{ custom_field.value }}</textarea>*/
/*                 </div>*/
/*               </div>*/
/*               {% endif %}*/
/*               {% if custom_field.type == 'file' %}*/
/*               <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 3 }}">*/
/*                 <label class="col-sm-2 control-label">{{ custom_field.name }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <button type="button" id="button-custom-field{{ custom_field.custom_field_id }}" class="btn btn-default"><i class="fa fa-upload"></i> {{ button_upload }}</button>*/
/*                   <input type="hidden" name="custom_field[{{ custom_field.custom_field_id }}]" value="{{ account_custom_field[custom_field.custom_field_id] ? account_custom_field[custom_field.custom_field_id] }}" id="input-custom-field{{ custom_field.custom_field_id }}" />*/
/*                 </div>*/
/*               </div>*/
/*               {% endif %}*/
/*               {% if custom_field.type == 'date' %}*/
/*               <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 3 }}">*/
/*                 <label class="col-sm-2 control-label" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <div class="input-group date">*/
/*                     <input type="text" name="custom_field[{{ custom_field.custom_field_id }}]" value="{{ account_custom_field[custom_field.custom_field_id] ? account_custom_field[custom_field.custom_field_id] : custom_field.value }}" placeholder="{{ custom_field.name }}" data-date-format="YYYY-MM-DD" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*                     <span class="input-group-btn">*/
/*                     <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                     </span></div>*/
/*                 </div>*/
/*               </div>*/
/*               {% endif %}*/
/*               {% if custom_field.type == 'time' %}*/
/*               <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 3 }}">*/
/*                 <label class="col-sm-2 control-label" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <div class="input-group time">*/
/*                     <input type="text" name="custom_field[{{ custom_field.custom_field_id }}]" value="{{ account_custom_field[custom_field.custom_field_id] ? account_custom_field[custom_field.custom_field_id] : custom_field.value }}" placeholder="{{ custom_field.name }}" data-date-format="HH:mm" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*                     <span class="input-group-btn">*/
/*                     <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                     </span></div>*/
/*                 </div>*/
/*               </div>*/
/*               {% endif %}*/
/*               {% if custom_field.type == 'datetime' %}*/
/*               <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 3 }}">*/
/*                 <label class="col-sm-2 control-label" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <div class="input-group datetime">*/
/*                     <input type="text" name="custom_field[{{ custom_field.custom_field_id }}]" value="{{ account_custom_field[custom_field.custom_field_id] ? account_custom_field[custom_field.custom_field_id] : custom_field.value }}" placeholder="{{ custom_field.name }}" data-date-format="YYYY-MM-DD HH:mm" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*                     <span class="input-group-btn">*/
/*                     <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                     </span></div>*/
/*                 </div>*/
/*               </div>*/
/*               {% endif %}*/
/*               {% endif %}*/
/*               {% endfor %}*/
/*               <div class="text-right">*/
/*                 <button type="button" id="button-customer" data-loading-text="{{ text_loading }}" class="btn btn-primary"><i class="fa fa-arrow-right"></i> {{ button_continue }}</button>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-cart">*/
/*               <div class="table-responsive">*/
/*                 <table class="table table-bordered">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td class="text-left">{{ column_product }}</td>*/
/*                       <td class="text-left">{{ column_model }}</td>*/
/*                       <!-- CIS -->*/
/*                       {% if shipping_code == 'my_parcel.my_parcel' %}*/
/*                       <td class="text-right">Shipped Quantity</td>*/
/*                       {% endif %}*/
/*                        <!-- CIS -->*/
/*                       <td class="text-right">{{ column_quantity }}</td>                      */
/*                       <td class="text-right">{{ column_price }}</td>*/
/*                       <td class="text-right">{{ column_total }}</td>                      */
/*                       <td>{{ column_action }}</td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody id="cart">*/
/*                     {% if order_products or order_vouchers %}*/
/*                     {% set product_row = 0 %}*/
/*                     {% for order_product in order_products %}*/
/*                     <tr>*/
/*                       <td class="text-left">{{ order_product.name }}<br />*/
/*                         <input type="hidden" name="product[{{ product_row }}][product_id]" value="{{ order_product.product_id }}" />*/
/*                         {% for option in order_product.option %}*/
/*                         - <small>{{ option.name }}: {{ option.value }}</small><br />*/
/*                         {% if option.type == 'select' or option.type == 'radio' or option.type == 'image' %}*/
/*                         <input type="hidden" name="product[{{ product_row }}][option][{{ option.product_option_id }}]" value="{{ option.product_option_value_id }}" />*/
/*                         {% endif %}*/
/*                         {% if option.type == 'checkbox' %}*/
/*                         <input type="hidden" name="product[{{ product_row }}][option][{{ option.product_option_id }}][]" value="{{ option.product_option_value_id }}" />*/
/*                         {% endif %}*/
/*                         {% if option.type == 'text' or option.type == 'textarea' or option.type == 'file' or option.type == 'date' or option.type == 'datetime' or option.type == 'time' %}*/
/*                         <input type="hidden" name="product[{{ product_row }}][option][{{ option.product_option_id }}]" value="{{ option.value }}" />*/
/*                         {% endif %}*/
/*                         {% endfor %}</td>*/
/*                       <td class="text-left">{{ order_product.model }}</td>*/
/*                       <!-- CIS -->*/
/*                       {% if shipping_code == 'my_parcel.my_parcel' %}*/
/*                       <td class="text-left"><input type="text" name="product[{{ product_row }}][squantity]" value="{{ order_product.squantity }}"/>*/
/*                       <input type="hidden" name="product[{{ product_row }}][squantity1]" value="{{ order_product.squantity }}"/>*/
/*                       </td>*/
/*                       {% endif %}*/
/*                       <!-- CIS -->*/
/*                       <td class="text-right">{{ order_product.quantity }}*/
/*                         <input type="hidden" name="product[{{ product_row }}][quantity]" value="{{ order_product.quantity }}" /></td>                      */
/*                       <td class="text-right"></td>*/
/*                       <td class="text-right"></td>*/
/*                       <td class="text-center"></td>*/
/*                     </tr>*/
/*                     {% set product_row = product_row + 1 %}*/
/*                     {% endfor %}*/
/*                     {% set voucher_row = 0 %}*/
/*                     {% for order_voucher in order_vouchers %}*/
/*                     <tr>*/
/*                       <td class="text-left">{{ order_voucher.description }}*/
/*                         <input type="hidden" name="voucher[{{ voucher_row }}][voucher_id]" value="{{ order_voucher.voucher_id }}" />*/
/*                         <input type="hidden" name="voucher[{{ voucher_row }}][description]" value="{{ order_voucher.description }}" />*/
/*                         <input type="hidden" name="voucher[{{ voucher_row }}][code]" value="{{ order_voucher.code }}" />*/
/*                         <input type="hidden" name="voucher[{{ voucher_row }}][from_name]" value="{{ order_voucher.from_name }}" />*/
/*                         <input type="hidden" name="voucher[{{ voucher_row }}][from_email]" value="{{ order_voucher.from_email }}" />*/
/*                         <input type="hidden" name="voucher[{{ voucher_row }}][to_name]" value="{{ order_voucher.to_name }}" />*/
/*                         <input type="hidden" name="voucher[{{ voucher_row }}][to_email]" value="{{ order_voucher.to_email }}" />*/
/*                         <input type="hidden" name="voucher[{{ voucher_row }}][voucher_theme_id]" value="{{ order_voucher.voucher_theme_id }}" />*/
/*                         <input type="hidden" name="voucher[{{ voucher_row }}][message]" value="{{ order_voucher.message }}" />*/
/*                         <input type="hidden" name="voucher[{{ voucher_row }}][amount]" value="{{ order_voucher.amount }}" /></td>*/
/*                       <td class="text-left"></td>*/
/*                       <td class="text-right">1</td>*/
/*                       <td class="text-right"></td>*/
/*                       <td class="text-right"></td>*/
/*                       <td class="text-center"></td>*/
/*                     </tr>*/
/*                     {% set voucher_row = voucher_row + 1 %}*/
/*                     {% endfor %}*/
/*                     {% else %}*/
/*                     <tr>*/
/*                       <td class="text-center" colspan="6">{{ text_no_results }}</td>*/
/*                     </tr>*/
/*                   </tbody>*/
/*                   {% endif %}*/
/*                 </table>*/
/*               </div>*/
/*               <ul class="nav nav-tabs nav-justified">*/
/*                 <li class="active"><a href="#tab-product" data-toggle="tab">{{ tab_product }}</a></li>*/
/*                 <li><a href="#tab-voucher" data-toggle="tab">{{ tab_voucher }}</a></li>*/
/*               </ul>*/
/*               <div class="tab-content">*/
/*                 <div class="tab-pane active" id="tab-product">*/
/*                   <fieldset>*/
/*                     <legend>{{ text_product }}</legend>*/
/*                     <div class="form-group">*/
/*                       <label class="col-sm-2 control-label" for="input-product">{{ entry_product }}</label>*/
/*                       <div class="col-sm-10">*/
/*                         <input type="text" name="product" value="" id="input-product" class="form-control" />*/
/*                         <input type="hidden" name="product_id" value="" />*/
/*                       </div>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                       <label class="col-sm-2 control-label" for="input-quantity">{{ entry_quantity }}</label>*/
/*                       <div class="col-sm-10">*/
/*                         <input type="text" name="quantity" value="1" id="input-quantity" class="form-control" />*/
/*                       </div>*/
/*                     </div>*/
/*                     <div id="option"></div>*/
/*                   </fieldset>*/
/*                   <div class="text-right">*/
/*                     <button type="button" id="button-product-add" data-loading-text="{{ text_loading }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i> {{ button_product_add }}</button>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="tab-pane" id="tab-voucher">*/
/*                   <fieldset>*/
/*                     <legend>{{ text_voucher }}</legend>*/
/*                     <div class="form-group required">*/
/*                       <label class="col-sm-2 control-label" for="input-to-name">{{ entry_to_name }}</label>*/
/*                       <div class="col-sm-10">*/
/*                         <input type="text" name="to_name" value="" id="input-to-name" class="form-control" />*/
/*                       </div>*/
/*                     </div>*/
/*                     <div class="form-group required">*/
/*                       <label class="col-sm-2 control-label" for="input-to-email">{{ entry_to_email }}</label>*/
/*                       <div class="col-sm-10">*/
/*                         <input type="text" name="to_email" value="" id="input-to-email" class="form-control" />*/
/*                       </div>*/
/*                     </div>*/
/*                     <div class="form-group required">*/
/*                       <label class="col-sm-2 control-label" for="input-from-name">{{ entry_from_name }}</label>*/
/*                       <div class="col-sm-10">*/
/*                         <input type="text" name="from_name" value="" id="input-from-name" class="form-control" />*/
/*                       </div>*/
/*                     </div>*/
/*                     <div class="form-group required">*/
/*                       <label class="col-sm-2 control-label" for="input-from-email">{{ entry_from_email }}</label>*/
/*                       <div class="col-sm-10">*/
/*                         <input type="text" name="from_email" value="" id="input-from-email" class="form-control" />*/
/*                       </div>*/
/*                     </div>*/
/*                     <div class="form-group required">*/
/*                       <label class="col-sm-2 control-label" for="input-theme">{{ entry_theme }}</label>*/
/*                       <div class="col-sm-10">*/
/*                         <select name="voucher_theme_id" id="input-theme" class="form-control">*/
/*                           {% for voucher_theme in voucher_themes %}*/
/*                           <option value="{{ voucher_theme.voucher_theme_id }}">{{ voucher_theme.name }}</option>*/
/*                           {% endfor %}*/
/*                         </select>*/
/*                       </div>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                       <label class="col-sm-2 control-label" for="input-message">{{ entry_message }}</label>*/
/*                       <div class="col-sm-10">*/
/*                         <textarea name="message" rows="5" id="input-message" class="form-control"></textarea>*/
/*                       </div>*/
/*                     </div>*/
/*                     <div class="form-group required">*/
/*                       <label class="col-sm-2 control-label" for="input-amount">{{ entry_amount }}</label>*/
/*                       <div class="col-sm-10">*/
/*                         <input type="text" name="amount" value="{{ voucher_min }}" id="input-amount" class="form-control" />*/
/*                       </div>*/
/*                     </div>*/
/*                   </fieldset>*/
/*                   <div class="text-right">*/
/*                     <button type="button" id="button-voucher-add" data-loading-text="{{ text_loading }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i> {{ button_voucher_add }}</button>*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*               <br />*/
/*               <div class="row">*/
/*                 <div class="col-sm-6 text-left">*/
/*                   <button type="button" onclick="$('a[href=\'#tab-customer\']').tab('show');" class="btn btn-default"><i class="fa fa-arrow-left"></i> {{ button_back }}</button>*/
/*                 </div>*/
/*                 <div class="col-sm-6 text-right">*/
/*                   <button type="button" id="button-cart" class="btn btn-primary"><i class="fa fa-arrow-right"></i> {{ button_continue }}</button>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-payment">*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-payment-address">{{ entry_address }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="payment_address" id="input-payment-address" class="form-control">*/
/*                     <option value="0" selected="selected">{{ text_none }}</option>*/
/*                     {% for address in addresses %}*/
/*                     <option value="{{ address.address_id }}">{{ address.firstname }} {{ address.lastname }}, {{ address.address_1 }}, {{ address.city }}, {{ address.country }}</option>*/
/*                     {% endfor %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label" for="input-payment-firstname">{{ entry_firstname }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="firstname" value="{{ payment_firstname }}" id="input-payment-firstname" class="form-control" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label" for="input-payment-lastname">{{ entry_lastname }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="lastname" value="{{ payment_lastname }}" id="input-payment-lastname" class="form-control" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-payment-company">{{ entry_company }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="company" value="{{ payment_company }}" id="input-payment-company" class="form-control" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label" for="input-payment-address-1">{{ entry_address_1 }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="address_1" value="{{ payment_address_1 }}" id="input-payment-address-1" class="form-control" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-payment-address-2">{{ entry_address_2 }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="address_2" value="{{ payment_address_2 }}" id="input-payment-address-2" class="form-control" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label" for="input-payment-city">{{ entry_city }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="city" value="{{ payment_city }}" id="input-payment-city" class="form-control" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label" for="input-payment-postcode">{{ entry_postcode }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="postcode" value="{{ payment_postcode }}" id="input-payment-postcode" class="form-control" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label" for="input-payment-country">{{ entry_country }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="country_id" id="input-payment-country" class="form-control">*/
/*                     <option value="">{{ text_select }}</option>*/
/*                     {% for country in countries %}*/
/*                     {% if country.country_id == payment_country_id %}*/
/*                     <option value="{{ country.country_id }}" selected="selected">{{ country.name }}</option>*/
/*                     {% else %}*/
/*                     <option value="{{ country.country_id }}">{{ country.name }}</option>*/
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label" for="input-payment-zone">{{ entry_zone }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="zone_id" id="input-payment-zone" class="form-control">*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               {% for custom_field in custom_fields %}*/
/*               {% if custom_field.location == 'address' %}*/
/*               {% if custom_field.type == 'select' %}*/
/*               <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 3 }}">*/
/*                 <label class="col-sm-2 control-label" for="input-payment-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="custom_field[{{ custom_field.custom_field_id }}]" id="input-payment-custom-field{{ custom_field.custom_field_id }}" class="form-control">*/
/*                     <option value="">{{ text_select }}</option>*/
/*                     {% for custom_field_value in custom_field.custom_field_value %}*/
/*                     {% if payment_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == payment_custom_field[custom_field.custom_field_id] %}*/
/*                     <option value="{{ custom_field_value.custom_field_value_id }}" selected="selected">{{ custom_field_value.name }}</option>*/
/*                     {% else %}*/
/*                     <option value="{{ custom_field_value.custom_field_value_id }}">{{ custom_field_value.name }}</option>*/
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               {% endif %}*/
/*               {% if custom_field.type == 'radio' %}*/
/*               <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 3 }}">*/
/*                 <label class="col-sm-2 control-label">{{ custom_field.name }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <div id="input-payment-custom-field{{ custom_field.custom_field_id }}">*/
/*                     {% for custom_field_value in custom_field.custom_field_value %}*/
/*                     <div class="radio">*/
/*                       {% if payment_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == payment_custom_field[custom_field.custom_field_id] %}*/
/*                       <label>*/
/*                         <input type="radio" name="custom_field[{{ custom_field.custom_field_id }}]" value="{{ custom_field_value.custom_field_value_id }}" checked="checked" />*/
/*                         {{ custom_field_value.name }}</label>*/
/*                       {% else %}*/
/*                       <label>*/
/*                         <input type="radio" name="custom_field[{{ custom_field.custom_field_id }}]" value="{{ custom_field_value.custom_field_value_id }}" />*/
/*                         {{ custom_field_value.name }}</label>*/
/*                       {% endif %}*/
/*                     </div>*/
/*                     {% endfor %}*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*               {% endif %}*/
/*               {% if custom_field.type == 'checkbox' %}*/
/*               <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 3 }}">*/
/*                 <label class="col-sm-2 control-label">{{ custom_field.name }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <div id="input-payment-custom-field{{ custom_field.custom_field_id }}">*/
/*                     {% for custom_field_value in custom_field.custom_field_value %}*/
/*                     <div class="checkbox">*/
/*                       {% if payment_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id in payment_custom_field[custom_field.custom_field_id] %}*/
/*                       <label>*/
/*                         <input type="checkbox" name="custom_field[{{ custom_field.custom_field_id }}][]" value="{{ custom_field_value.custom_field_value_id }}" checked="checked" />*/
/*                         {{ custom_field_value.name }}</label>*/
/*                       {% else %}*/
/*                       <label>*/
/*                         <input type="checkbox" name="custom_field[{{ custom_field.custom_field_id }}][]" value="{{ custom_field_value.custom_field_value_id }}" />*/
/*                         {{ custom_field_value.name }}</label>*/
/*                       {% endif %}*/
/*                     </div>*/
/*                     {% endfor %}*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*               {% endif %}*/
/*               {% if custom_field.type == 'text' %}*/
/*               <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 3 }}">*/
/*                 <label class="col-sm-2 control-label" for="input-payment-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="custom_field[{{ custom_field.custom_field_id }}]" value="{{ payment_custom_field[custom_field.custom_field_id] ? payment_custom_field[custom_field.custom_field_id] : custom_field.value }}" placeholder="{{ custom_field.name }}" id="input-payment-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*                 </div>*/
/*               </div>*/
/*               {% endif %}*/
/*               {% if custom_field.type == 'textarea' %}*/
/*               <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 3 }}">*/
/*                 <label class="col-sm-2 control-label" for="input-payment-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <textarea name="custom_field[{{ custom_field.custom_field_id }}]" rows="5" placeholder="{{ custom_field.name }}" id="input-payment-custom-field{{ custom_field.custom_field_id }}" class="form-control">{{ payment_custom_field[custom_field.custom_field_id] ? payment_custom_field[custom_field.custom_field_id] : custom_field.value }}</textarea>*/
/*                 </div>*/
/*               </div>*/
/*               {% endif %}*/
/*               {% if custom_field.type == 'file' %}*/
/*               <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 3 }}">*/
/*                 <label class="col-sm-2 control-label">{{ custom_field.name }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <button type="button" id="button-payment-custom-field{{ custom_field.custom_field_id }}" data-loading-text="{{ text_loading }}" class="btn btn-default"><i class="fa fa-upload"></i> {{ button_upload }}</button>*/
/*                   <input type="hidden" name="custom_field[{{ custom_field.custom_field_id }}]" value="{{ payment_custom_field[custom_field.custom_field_id] ? payment_custom_field[custom_field.custom_field_id] }}" id="input-payment-custom-field{{ custom_field.custom_field_id }}" />*/
/*                 </div>*/
/*               </div>*/
/*               {% endif %}*/
/*               {% if custom_field.type == 'date' %}*/
/*               <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 3 }}">*/
/*                 <label class="col-sm-2 control-label" for="input-payment-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <div class="input-group date">*/
/*                     <input type="text" name="custom_field[{{ custom_field.custom_field_id }}]" value="{{ payment_custom_field[custom_field.custom_field_id] ? payment_custom_field[custom_field.custom_field_id] : custom_field.value }}" placeholder="{{ custom_field.name }}" data-date-format="YYYY-MM-DD" id="input-payment-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*                     <span class="input-group-btn">*/
/*                     <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                     </span></div>*/
/*                 </div>*/
/*               </div>*/
/*               {% endif %}*/
/*               {% if custom_field.type == 'time' %}*/
/*               <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 3 }}">*/
/*                 <label class="col-sm-2 control-label" for="input-payment-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <div class="input-group time">*/
/*                     <input type="text" name="custom_field[{{ custom_field.custom_field_id }}]" value="{{ payment_custom_field[custom_field.custom_field_id] ? payment_custom_field[custom_field.custom_field_id] : custom_field.value }}" placeholder="{{ custom_field.name }}" data-date-format="HH:mm" id="input-payment-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*                     <span class="input-group-btn">*/
/*                     <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                     </span></div>*/
/*                 </div>*/
/*               </div>*/
/*               {% endif %}*/
/*               {% if custom_field.type == 'datetime' %}*/
/*               <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 3 }}">*/
/*                 <label class="col-sm-2 control-label" for="input-payment-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <div class="input-group datetime">*/
/*                     <input type="text" name="custom_field[{{ custom_field.custom_field_id }}]" value="{{ payment_custom_field[custom_field.custom_field_id] ? payment_custom_field[custom_field.custom_field_id] : custom_field.value }}" placeholder="{{ custom_field.name }}" data-date-format="YYYY-MM-DD HH:mm" id="input-payment-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*                     <span class="input-group-btn">*/
/*                     <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                     </span></div>*/
/*                 </div>*/
/*               </div>*/
/*               {% endif %}*/
/*               {% endif %}*/
/*               {% endfor %}*/
/*               <div class="row">*/
/*                 <div class="col-sm-6 text-left">*/
/*                   <button type="button" onclick="$('a[href=\'#tab-cart\']').tab('show');" class="btn btn-default"><i class="fa fa-arrow-left"></i> {{ button_back }}</button>*/
/*                 </div>*/
/*                 <div class="col-sm-6 text-right">*/
/*                   <button type="button" id="button-payment-address" data-loading-text="{{ text_loading }}" class="btn btn-primary"><i class="fa fa-arrow-right"></i> {{ button_continue }}</button>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-shipping">*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-shipping-address">{{ entry_address }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="shipping_address" id="input-shipping-address" class="form-control">*/
/*                     <option value="0" selected="selected">{{ text_none }}</option>*/
/*                     {% for address in addresses %}*/
/*                     <option value="{{ address.address_id }}">{{ address.firstname }} {{ address.lastname }}, {{ address.address_1 }}, {{ address.city }}, {{ address.country }}</option>*/
/*                     {% endfor %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label" for="input-shipping-firstname">{{ entry_firstname }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="firstname" value="{{ shipping_firstname }}" id="input-shipping-firstname" class="form-control" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label" for="input-shipping-lastname">{{ entry_lastname }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="lastname" value="{{ shipping_lastname }}" id="input-shipping-lastname" class="form-control" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-shipping-company">{{ entry_company }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="company" value="{{ shipping_company }}" id="input-shipping-company" class="form-control" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label" for="input-shipping-address-1">{{ entry_address_1 }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="address_1" value="{{ shipping_address_1 }}" id="input-shipping-address-1" class="form-control" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-shipping-address-2">{{ entry_address_2 }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="address_2" value="{{ shipping_address_2 }}" id="input-shipping-address-2" class="form-control" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label" for="input-shipping-city">{{ entry_city }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="city" value="{{ shipping_city }}" id="input-shipping-city" class="form-control" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label" for="input-shipping-postcode">{{ entry_postcode }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="postcode" value="{{ shipping_postcode }}" id="input-shipping-postcode" class="form-control" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label" for="input-shipping-country">{{ entry_country }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="country_id" id="input-shipping-country" class="form-control">*/
/*                     <option value="">{{ text_select }}</option>*/
/*                     {% for country in countries %}*/
/*                     {% if country.country_id == shipping_country_id %}*/
/*                     <option value="{{ country.country_id }}" selected="selected">{{ country.name }}</option>*/
/*                     {% else %}*/
/*                     <option value="{{ country.country_id }}">{{ country.name }}</option>*/
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label" for="input-shipping-zone">{{ entry_zone }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="zone_id" id="input-shipping-zone" class="form-control">*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               {% for custom_field in custom_fields %}*/
/*               {% if custom_field.location == 'address' %}*/
/*               {% if custom_field.type == 'select' %}*/
/*               <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 3 }}">*/
/*                 <label class="col-sm-2 control-label" for="input-shipping-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="custom_field[{{ custom_field.custom_field_id }}]" id="input-shipping-custom-field{{ custom_field.custom_field_id }}" class="form-control">*/
/*                     <option value="">{{ text_select }}</option>*/
/*                     {% for custom_field_value in custom_field.custom_field_value %}*/
/*                     {% if shipping_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == shipping_custom_field[custom_field.custom_field_id] %}*/
/*                     <option value="{{ custom_field_value.custom_field_value_id }}" selected="selected">{{ custom_field_value.name }}</option>*/
/*                     {% else %}*/
/*                     <option value="{{ custom_field_value.custom_field_value_id }}">{{ custom_field_value.name }}</option>*/
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               {% endif %}*/
/*               {% if custom_field.type == 'radio' %}*/
/*               <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 3 }}">*/
/*                 <label class="col-sm-2 control-label">{{ custom_field.name }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <div id="input-shipping-custom-field{{ custom_field.custom_field_id }}">*/
/*                     {% for custom_field_value in custom_field.custom_field_value %}*/
/*                     <div class="radio">*/
/*                       {% if shipping_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == shipping_custom_field[custom_field.custom_field_id] %}*/
/*                       <label>*/
/*                         <input type="radio" name="custom_field[{{ custom_field.custom_field_id }}]" value="{{ custom_field_value.custom_field_value_id }}" checked="checked" />*/
/*                         {{ custom_field_value.name }}</label>*/
/*                       {% else %}*/
/*                       <label>*/
/*                         <input type="radio" name="custom_field[{{ custom_field.custom_field_id }}]" value="{{ custom_field_value.custom_field_value_id }}" />*/
/*                         {{ custom_field_value.name }}</label>*/
/*                       {% endif %}*/
/*                     </div>*/
/*                     {% endfor %}*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*               {% endif %}*/
/*               {% if custom_field.type == 'checkbox' %}*/
/*               <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 3 }}">*/
/*                 <label class="col-sm-2 control-label">{{ custom_field.name }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <div id="input-shipping-custom-field{{ custom_field.custom_field_id }}">*/
/*                     {% for custom_field_value in custom_field.custom_field_value %}*/
/*                     <div class="checkbox">*/
/*                       {% if shipping_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id in shipping_custom_field[custom_field.custom_field_id] %}*/
/*                       <label>*/
/*                         <input type="checkbox" name="custom_field[{{ custom_field.custom_field_id }}][]" value="{{ custom_field_value.custom_field_value_id }}" checked="checked" />*/
/*                         {{ custom_field_value.name }}</label>*/
/*                       {% else %}*/
/*                       <label>*/
/*                         <input type="checkbox" name="custom_field[{{ custom_field.custom_field_id }}][]" value="{{ custom_field_value.custom_field_value_id }}" />*/
/*                         {{ custom_field_value.name }}</label>*/
/*                       {% endif %}*/
/*                     </div>*/
/*                     {% endfor %}*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*               {% endif %}*/
/*               {% if custom_field.type == 'text' %}*/
/*               <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 3 }}">*/
/*                 <label class="col-sm-2 control-label" for="input-shipping-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="custom_field[{{ custom_field.custom_field_id }}]" value="{{ shipping_custom_field[custom_field.custom_field_id] ? shipping_custom_field[custom_field.custom_field_id] ? custom_field.value }}" placeholder="{{ custom_field.name }}" id="input-shipping-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*                 </div>*/
/*               </div>*/
/*               {% endif %}*/
/*               {% if custom_field.type == 'textarea' %}*/
/*               <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 3 }}">*/
/*                 <label class="col-sm-2 control-label" for="input-shipping-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <textarea name="custom_field[{{ custom_field.custom_field_id }}]" rows="5" placeholder="{{ custom_field.name }}" id="input-shipping-custom-field{{ custom_field.custom_field_id }}" class="form-control">{{ shipping_custom_field[custom_field.custom_field_id] ? shipping_custom_field[custom_field.custom_field_id] : custom_field.value }}</textarea>*/
/*                 </div>*/
/*               </div>*/
/*               {% endif %}*/
/*               {% if custom_field.type == 'file' %}*/
/*               <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 3 }}">*/
/*                 <label class="col-sm-2 control-label">{{ custom_field.name }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <button type="button" id="button-shipping-custom-field{{ custom_field.custom_field_id }}" data-loading-text="{{ text_loading }}" class="btn btn-default"><i class="fa fa-upload"></i> {{ button_upload }}</button>*/
/*                   <input type="hidden" name="custom_field[{{ custom_field.custom_field_id }}]" value="{{ shipping_custom_field[custom_field.custom_field_id] ? shipping_custom_field[custom_field.custom_field_id] }}" id="input-custom-field{{ custom_field.custom_field_id }}" />*/
/*                 </div>*/
/*               </div>*/
/*               {% endif %}*/
/*               {% if custom_field.type == 'date' %}*/
/*               <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 3 }}">*/
/*                 <label class="col-sm-2 control-label" for="input-shipping-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <div class="input-group date">*/
/*                     <input type="text" name="custom_field[{{ custom_field.custom_field_id }}]" value="{{ shipping_custom_field[custom_field.custom_field_id] ? shipping_custom_field[custom_field.custom_field_id] : custom_field.value }}" placeholder="{{ custom_field.name }}" data-date-format="YYYY-MM-DD" id="input-shipping-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*                     <span class="input-group-btn">*/
/*                     <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                     </span></div>*/
/*                 </div>*/
/*               </div>*/
/*               {% endif %}*/
/*               {% if custom_field.type == 'time' %}*/
/*               <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 3 }}">*/
/*                 <label class="col-sm-2 control-label" for="input-shipping-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <div class="input-group time">*/
/*                     <input type="text" name="custom_field[{{ custom_field.custom_field_id }}]" value="{{ shipping_custom_field[custom_field.custom_field_id] ? shipping_custom_field[custom_field.custom_field_id] : custom_field.value }}" placeholder="{{ custom_field.name }}" data-date-format="HH:mm" id="input-shipping-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*                     <span class="input-group-btn">*/
/*                     <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                     </span></div>*/
/*                 </div>*/
/*               </div>*/
/*               {% endif %}*/
/*               {% if custom_field.type == 'datetime' %}*/
/*               <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 3 }}">*/
/*                 <label class="col-sm-2 control-label" for="input-shipping-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <div class="input-group datetime">*/
/*                     <input type="text" name="custom_field[{{ custom_field.custom_field_id }}]" value="{{ shipping_custom_field[custom_field.custom_field_id] ? shipping_custom_field[custom_field.custom_field_id] : custom_field.value }}" placeholder="{{ custom_field.name }}" data-date-format="YYYY-MM-DD HH:mm" id="input-shipping-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*                     <span class="input-group-btn">*/
/*                     <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                     </span></div>*/
/*                 </div>*/
/*               </div>*/
/*               {% endif %}*/
/*               {% endif %}*/
/*               {% endfor %}*/
/*               <div class="row">*/
/*                 <div class="col-sm-6 text-left">*/
/*                   <button type="button" onclick="$('a[href=\'#tab-payment\']').tab('show');" class="btn btn-default"><i class="fa fa-arrow-left"></i> {{ button_back }}</button>*/
/*                 </div>*/
/*                 <div class="col-sm-6 text-right">*/
/*                   <button type="button" id="button-shipping-address" data-loading-text="{{ text_loading }}" class="btn btn-primary"><i class="fa fa-arrow-right"></i> {{ button_continue }}</button>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-total">*/
/*               <div class="table-responsive">*/
/*                 <table class="table table-bordered">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td class="text-left">{{ column_product }}</td>*/
/*                       <td class="text-left">{{ column_model }}</td>*/
/*                       <td class="text-right">{{ column_quantity }}</td>*/
/*                       <td class="text-right">{{ column_price }}</td>*/
/*                       <td class="text-right">{{ column_total }}</td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody id="total">*/
/*                     <tr>*/
/*                       <td class="text-center" colspan="5">{{ text_no_results }}</td>*/
/*                     </tr>*/
/*                   </tbody>*/
/*                 </table>*/
/*               </div>*/
/*               <fieldset>*/
/*                 <legend>{{ text_order_detail }}</legend>*/
/*                 <div class="form-group required">*/
/*                   <label class="col-sm-2 control-label" for="input-shipping-method">{{ entry_shipping_method }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <div class="input-group">*/
/*                       <select name="shipping_method" id="input-shipping-method" class="form-control">*/
/*                         <option value="">{{ text_select }}</option>*/
/*                         {% if shipping_code %}*/
/*                         <option value="{{ shipping_code }}" selected="selected">{{ shipping_method }}</option>*/
/*                         {% endif %}*/
/*                       </select>*/
/*                       <span class="input-group-btn">*/
/*                       <button type="button" id="button-shipping-method" data-loading-text="{{ text_loading }}" class="btn btn-primary">{{ button_apply }}</button>*/
/*                       </span></div>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group required">*/
/*                   <label class="col-sm-2 control-label" for="input-payment-method">{{ entry_payment_method }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <div class="input-group">*/
/*                       <select name="payment_method" id="input-payment-method" class="form-control">*/
/*                         <option value="">{{ text_select }}</option>*/
/*                         {% if payment_code %}*/
/*                         <option value="{{ payment_code }}" selected="selected">{{ payment_method }}</option>*/
/*                         {% endif %}*/
/*                       </select>*/
/*                       <span class="input-group-btn">*/
/*                       <button type="button" id="button-payment-method" data-loading-text="{{ text_loading }}" class="btn btn-primary">{{ button_apply }}</button>*/
/*                       </span></div>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-coupon">{{ entry_coupon }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <div class="input-group">*/
/*                       <input type="text" name="coupon" value="{{ coupon }}" id="input-coupon" class="form-control" />*/
/*                       <span class="input-group-btn">*/
/*                       <button type="button" id="button-coupon" data-loading-text="{{ text_loading }}" class="btn btn-primary">{{ button_apply }}</button>*/
/*                       </span></div>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-voucher">{{ entry_voucher }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <div class="input-group">*/
/*                       <input type="text" name="voucher" value="{{ voucher }}" id="input-voucher" data-loading-text="{{ text_loading }}" class="form-control" />*/
/*                       <span class="input-group-btn">*/
/*                       <button type="button" id="button-voucher" data-loading-text="{{ text_loading }}" class="btn btn-primary">{{ button_apply }}</button>*/
/*                       </span></div>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-reward">{{ entry_reward }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <div class="input-group">*/
/*                       <input type="text" name="reward" value="{{ reward }}" id="input-reward" data-loading-text="{{ text_loading }}" class="form-control" />*/
/*                       <span class="input-group-btn">*/
/*                       <button type="button" id="button-reward" data-loading-text="{{ text_loading }}" class="btn btn-primary">{{ button_apply }}</button>*/
/*                       </span></div>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-order-status">{{ entry_order_status }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="order_status_id" id="input-order-status" class="form-control">*/
/*                       {% for order_status in order_statuses %}*/
/*                       {% if order_status.order_status_id == order_status_id %}*/
/*                       <option value="{{ order_status.order_status_id }}" selected="selected">{{ order_status.name }}</option>*/
/*                       {% else %}*/
/*                       <option value="{{ order_status.order_status_id }}">{{ order_status.name }}</option>*/
/*                       {% endif %}*/
/*                       {% endfor %}*/
/*                     </select>*/
/*                     <input type="hidden" name="order_id" value="{{ order_id }}" />*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-comment">{{ entry_comment }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <textarea name="comment" rows="5" id="input-comment" class="form-control">{{ comment }}</textarea>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-affiliate">{{ entry_affiliate }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="affiliate" value="{{ affiliate }}" id="input-affiliate" class="form-control" />*/
/*                     <input type="hidden" name="affiliate_id" value="{{ affiliate_id }}" />*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <div class="row">*/
/*                 <div class="col-sm-6 text-left">*/
/*                   <button type="button" onclick="$('select[name=\'shipping_method\']').prop('disabled') ? $('a[href=\'#tab-payment\']').tab('show') : $('a[href=\'#tab-shipping\']').tab('show');" class="btn btn-default"><i class="fa fa-arrow-left"></i> {{ button_back }}</button>*/
/*                 </div>*/
/*                 <div class="col-sm-6 text-right">*/
/*                   <button type="button" id="button-refresh" data-toggle="tooltip" title="{{ button_refresh }}" data-loading-text="{{ text_loading }}" class="btn btn-warning"><i class="fa fa-refresh"></i></button>*/
/*                   <button type="button" id="button-save" class="btn btn-primary"><i class="fa fa-check-circle"></i> {{ button_save }}</button>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*         </form>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   <script type="text/javascript"><!--*/
/* // Disable the tabs*/
/* $('#order a[data-toggle=\'tab\']').on('click', function(e) {*/
/* 	return false;*/
/* });*/
/* */
/* // Currency*/
/* $('select[name=\'currency\']').on('change', function() {*/
/* 	$.ajax({*/
/* 		url: '{{ catalog }}index.php?route=api/currency&api_token={{ api_token }}&store_id=' + $('select[name=\'store_id\'] option:selected').val(),*/
/* 		type: 'post',*/
/* 		data: 'currency=' + $('select[name=\'currency\'] option:selected').val(),*/
/* 		dataType: 'json',*/
/* 		crossDomain: true,*/
/* 		beforeSend: function() {*/
/* 			$('select[name=\'currency\']').prop('disabled', true);*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('select[name=\'currency\']').prop('disabled', false);*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible, .text-danger').remove();*/
/* 			$('.form-group').removeClass('has-error');*/
/* */
/* 			if (json['error']) {*/
/* 				$('#content > .container-fluid').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* */
/* 				// Highlight any found errors*/
/* 				$('select[name=\'currency\']').closest('.form-group').addClass('has-error');*/
/* 			}*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* $('select[name=\'currency\']').trigger('change');*/
/* */
/* // Customer*/
/* $('input[name=\'customer\']').autocomplete({*/
/* 	'source': function(request, response) {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=customer/customer/autocomplete&user_token={{ user_token }}&filter_name=' +  encodeURIComponent(request),*/
/* 			dataType: 'json',*/
/* 			success: function(json) {*/
/* 				json.unshift({*/
/* 					customer_id: '0',*/
/* 					customer_group_id: '{{ customer_group_id }}',*/
/* 					name: '{{ text_none }}',*/
/* 					customer_group: '',*/
/* 					firstname: '',*/
/* 					lastname: '',*/
/* 					email: '',*/
/* 					telephone: '',*/
/* 					custom_field: [],*/
/* 					address: []*/
/* 				});*/
/* */
/* 				response($.map(json, function(item) {*/
/* 					return {*/
/* 						category: item['customer_group'],*/
/* 						label: item['name'],*/
/* 						value: item['customer_id'],*/
/* 						customer_group_id: item['customer_group_id'],*/
/* 						firstname: item['firstname'],*/
/* 						lastname: item['lastname'],*/
/* 						email: item['email'],*/
/* 						telephone: item['telephone'],*/
/* 						custom_field: item['custom_field'],*/
/* 						address: item['address']*/
/* 					}*/
/* 				}));*/
/* 			}*/
/* 		});*/
/* 	},*/
/* 	'select': function(item) {*/
/* 		// Reset all custom fields*/
/* 		$('#tab-customer input[type=\'text\'], #tab-customer textarea').not('#tab-customer input[name=\'customer\'], #tab-customer input[name=\'customer_id\']').val('');*/
/* 		$('#tab-customer select option').not($('#tab-customer select[name=\'store_id\'] option, #tab-customer select[name=\'currency\'] option')).removeAttr('selected');*/
/* 		$('#tab-customer input[type=\'checkbox\'], #tab-customer input[type=\'radio\']').removeAttr('checked');*/
/* */
/* 		$('#tab-customer input[name=\'customer\']').val(item['label']);*/
/* 		$('#tab-customer input[name=\'customer_id\']').val(item['value']);*/
/* 		$('#tab-customer select[name=\'customer_group_id\']').val(item['customer_group_id']);*/
/* 		$('#tab-customer input[name=\'firstname\']').val(item['firstname']);*/
/* 		$('#tab-customer input[name=\'lastname\']').val(item['lastname']);*/
/* 		$('#tab-customer input[name=\'email\']').val(item['email']);*/
/* 		$('#tab-customer input[name=\'telephone\']').val(item['telephone']);*/
/* */
/* 		for (i in item.custom_field) {*/
/* 			$('#tab-customer select[name=\'custom_field[' + i + ']\']').val(item.custom_field[i]);*/
/* 			$('#tab-customer textarea[name=\'custom_field[' + i + ']\']').val(item.custom_field[i]);*/
/* 			$('#tab-customer input[name^=\'custom_field[' + i + ']\'][type=\'text\']').val(item.custom_field[i]);*/
/* 			$('#tab-customer input[name^=\'custom_field[' + i + ']\'][type=\'hidden\']').val(item.custom_field[i]);*/
/* 			$('#tab-customer input[name^=\'custom_field[' + i + ']\'][type=\'radio\'][value=\'' + item.custom_field[i] + '\']').prop('checked', true);*/
/* */
/* 			if (item.custom_field[i] instanceof Array) {*/
/* 				for (j = 0; j < item.custom_field[i].length; j++) {*/
/* 					$('#tab-customer input[name^=\'custom_field[' + i + ']\'][type=\'checkbox\'][value=\'' + item.custom_field[i][j] + '\']').prop('checked', true);*/
/* 				}*/
/* 			}*/
/* 		}*/
/* */
/* 		$('select[name=\'customer_group_id\']').trigger('change');*/
/* */
/* 		html = '<option value="0">{{ text_none }}</option>';*/
/* */
/* 		for (i in  item['address']) {*/
/* 			html += '<option value="' + item['address'][i]['address_id'] + '">' + item['address'][i]['firstname'] + ' ' + item['address'][i]['lastname'] + ', ' + item['address'][i]['address_1'] + ', ' + item['address'][i]['city'] + ', ' + item['address'][i]['country'] + '</option>';*/
/* 		}*/
/* */
/* 		$('select[name=\'payment_address\']').html(html);*/
/* 		$('select[name=\'shipping_address\']').html(html);*/
/* 	}*/
/* });*/
/* */
/* // Custom Fields*/
/* $('select[name=\'customer_group_id\']').on('change', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=customer/customer/customfield&user_token={{ user_token }}&customer_group_id=' + this.value,*/
/* 		dataType: 'json',*/
/* 		success: function(json) {*/
/* 			$('.custom-field').hide();*/
/* 			$('.custom-field').removeClass('required');*/
/* */
/* 			for (i = 0; i < json.length; i++) {*/
/* 				custom_field = json[i];*/
/* */
/* 				$('.custom-field' + custom_field['custom_field_id']).show();*/
/* */
/* 				if (custom_field['required']) {*/
/* 					$('.custom-field' + custom_field['custom_field_id']).addClass('required');*/
/* 				}*/
/* 			}*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* $('select[name=\'customer_group_id\']').trigger('change');*/
/* */
/* $('#button-customer').on('click', function() {*/
/* 	$.ajax({*/
/* 		url: '{{ catalog }}index.php?route=api/customer&api_token={{ api_token }}&store_id=' + $('select[name=\'store_id\'] option:selected').val(),*/
/* 		type: 'post',*/
/* 		data: $('#tab-customer input[type=\'text\'], #tab-customer input[type=\'hidden\'], #tab-customer input[type=\'radio\']:checked, #tab-customer input[type=\'checkbox\']:checked, #tab-customer select, #tab-customer textarea'),*/
/* 		dataType: 'json',*/
/* 		crossDomain: true,*/
/* 		beforeSend: function() {*/
/* 			$('#button-customer').button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			 $('#button-customer').button('reset');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible, .text-danger').remove();*/
/* 			$('.form-group').removeClass('has-error');*/
/* */
/* 			if (json['error']) {*/
/* 				if (json['error']['warning']) {*/
/* 					$('#content > .container-fluid').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error']['warning'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* 				}*/
/* */
/* 				for (i in json['error']) {*/
/* 					var element = $('#input-' + i.replace('_', '-'));*/
/* */
/* 					if (element.parent().hasClass('input-group')) {*/
/*                    		$(element).parent().after('<div class="text-danger">' + json['error'][i] + '</div>');*/
/* 					} else {*/
/* 						$(element).after('<div class="text-danger">' + json['error'][i] + '</div>');*/
/* 					}*/
/* 				}*/
/* */
/* 				// Highlight any found errors*/
/* 				$('.text-danger').parentsUntil('.form-group').parent().addClass('has-error');*/
/* 			} else {*/
/*                 // Refresh products, vouchers and totals*/
/*                 var request_1 = $.ajax({*/
/*                     url: '{{ catalog }}index.php?route=api/cart/add&api_token={{ api_token }}&store_id=' + $('select[name=\'store_id\'] option:selected').val(),*/
/*                     type: 'post',*/
/*                     data: $('#cart input[name^=\'product\'][type=\'text\'], #cart input[name^=\'product\'][type=\'hidden\'], #cart input[name^=\'product\'][type=\'radio\']:checked, #cart input[name^=\'product\'][type=\'checkbox\']:checked, #cart select[name^=\'product\'], #cart textarea[name^=\'product\']'),*/
/*                     dataType: 'json',*/
/*                     crossDomain: true,*/
/*                     beforeSend: function() {*/
/*                         $('#button-product-add').button('loading');*/
/*                     },*/
/*                     complete: function() {*/
/*                         $('#button-product-add').button('reset');*/
/*                     },*/
/*                     success: function(json) {*/
/*                         $('.alert-dismissible, .text-danger').remove();*/
/*                         $('.form-group').removeClass('has-error');*/
/* */
/*                         if (json['error'] && json['error']['warning']) {*/
/*                             $('#content > .container-fluid').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error']['warning'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/*                         }*/
/*             		},*/
/*                     error: function(xhr, ajaxOptions, thrownError) {*/
/*                         alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                     }*/
/*                 });*/
/* */
/*                 var request_2 = request_1.then(function() {*/
/*                     $.ajax({*/
/*                         url: '{{ catalog }}index.php?route=api/voucher/add&api_token={{ api_token }}&store_id=' + $('select[name=\'store_id\'] option:selected').val(),*/
/*                         type: 'post',*/
/*                         data: $('#cart input[name^=\'voucher\'][type=\'text\'], #cart input[name^=\'voucher\'][type=\'hidden\'], #cart input[name^=\'voucher\'][type=\'radio\']:checked, #cart input[name^=\'voucher\'][type=\'checkbox\']:checked, #cart select[name^=\'voucher\'], #cart textarea[name^=\'voucher\']'),*/
/*                         dataType: 'json',*/
/*                         crossDomain: true,*/
/*                         beforeSend: function() {*/
/*                             $('#button-voucher-add').button('loading');*/
/*                         },*/
/*                         complete: function() {*/
/*                             $('#button-voucher-add').button('reset');*/
/*                         },*/
/*                         success: function(json) {*/
/*                             $('.alert-dismissible, .text-danger').remove();*/
/*                             $('.form-group').removeClass('has-error');*/
/* */
/*                             if (json['error'] && json['error']['warning']) {*/
/*                                 $('#content > .container-fluid').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error']['warning'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/*                             }*/
/*                 		},*/
/*                         error: function(xhr, ajaxOptions, thrownError) {*/
/*                             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                         }*/
/*                     });*/
/*                 });*/
/* */
/*                 request_2.done(function() {*/
/*                     $('#button-refresh').trigger('click');*/
/* */
/*                     $('a[href=\'#tab-cart\']').tab('show');*/
/*                 });*/
/* 			}*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* $('#tab-product input[name=\'product\']').autocomplete({*/
/* 	'source': function(request, response) {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=catalog/product/autocomplete&user_token={{ user_token }}&filter_name=' +  encodeURIComponent(request),*/
/* 			dataType: 'json',*/
/* 			success: function(json) {*/
/* 				response($.map(json, function(item) {*/
/* 					return {*/
/* 						label: item['name'],*/
/* 						value: item['product_id'],*/
/* 						model: item['model'],*/
/* 						option: item['option'],*/
/* 						price: item['price']*/
/* 					}*/
/* 				}));*/
/* 			}*/
/* 		});*/
/* 	},*/
/* 	'select': function(item) {*/
/* 		$('#tab-product input[name=\'product\']').val(item['label']);*/
/* 		$('#tab-product input[name=\'product_id\']').val(item['value']);*/
/* */
/* 		if (item['option'] != '') {*/
/*  			html  = '<fieldset>';*/
/*             html += '  <legend>{{ entry_option }}</legend>';*/
/* */
/* 			for (i = 0; i < item['option'].length; i++) {*/
/* 				option = item['option'][i];*/
/* */
/* 				if (option['type'] == 'select') {*/
/* 					html += '<div class="form-group' + (option['required'] ? ' required' : '') + '">';*/
/* 					html += '  <label class="col-sm-2 control-label" for="input-option' + option['product_option_id'] + '">' + option['name'] + '</label>';*/
/* 					html += '  <div class="col-sm-10">';*/
/* 					html += '    <select name="option[' + option['product_option_id'] + ']" id="input-option' + option['product_option_id'] + '" class="form-control">';*/
/* 					html += '      <option value="">{{ text_select }}</option>';*/
/* */
/* 					for (j = 0; j < option['product_option_value'].length; j++) {*/
/* 						option_value = option['product_option_value'][j];*/
/* */
/* 						html += '<option value="' + option_value['product_option_value_id'] + '">' + option_value['name'];*/
/* */
/* 						if (option_value['price']) {*/
/* 							html += ' (' + option_value['price_prefix'] + option_value['price'] + ')';*/
/* 						}*/
/* */
/* 						html += '</option>';*/
/* 					}*/
/* */
/* 					html += '    </select>';*/
/* 					html += '  </div>';*/
/* 					html += '</div>';*/
/* 				}*/
/* */
/* 				if (option['type'] == 'radio') {*/
/* 					html += '<div class="form-group' + (option['required'] ? ' required' : '') + '">';*/
/* 					html += '  <label class="col-sm-2 control-label" for="input-option' + option['product_option_id'] + '">' + option['name'] + '</label>';*/
/* 					html += '  <div class="col-sm-10">';*/
/* 					html += '    <select name="option[' + option['product_option_id'] + ']" id="input-option' + option['product_option_id'] + '" class="form-control">';*/
/* 					html += '      <option value="">{{ text_select }}</option>';*/
/* */
/* 					for (j = 0; j < option['product_option_value'].length; j++) {*/
/* 						option_value = option['product_option_value'][j];*/
/* */
/* 						html += '<option value="' + option_value['product_option_value_id'] + '">' + option_value['name'];*/
/* */
/* 						if (option_value['price']) {*/
/* 							html += ' (' + option_value['price_prefix'] + option_value['price'] + ')';*/
/* 						}*/
/* */
/* 						html += '</option>';*/
/* 					}*/
/* */
/* 					html += '    </select>';*/
/* 					html += '  </div>';*/
/* 					html += '</div>';*/
/* 				}*/
/* */
/* 				if (option['type'] == 'checkbox') {*/
/* 					html += '<div class="form-group' + (option['required'] ? ' required' : '') + '">';*/
/* 					html += '  <label class="col-sm-2 control-label">' + option['name'] + '</label>';*/
/* 					html += '  <div class="col-sm-10">';*/
/* 					html += '    <div id="input-option' + option['product_option_id'] + '">';*/
/* */
/* 					for (j = 0; j < option['product_option_value'].length; j++) {*/
/* 						option_value = option['product_option_value'][j];*/
/* */
/* 						html += '<div class="checkbox">';*/
/* */
/* 						html += '  <label><input type="checkbox" name="option[' + option['product_option_id'] + '][]" value="' + option_value['product_option_value_id'] + '" /> ' + option_value['name'];*/
/* */
/* 						if (option_value['price']) {*/
/* 							html += ' (' + option_value['price_prefix'] + option_value['price'] + ')';*/
/* 						}*/
/* */
/* 						html += '  </label>';*/
/* 						html += '</div>';*/
/* 					}*/
/* */
/* 					html += '    </div>';*/
/* 					html += '  </div>';*/
/* 					html += '</div>';*/
/* 				}*/
/* */
/* 				if (option['type'] == 'image') {*/
/* 					html += '<div class="form-group' + (option['required'] ? ' required' : '') + '">';*/
/* 					html += '  <label class="col-sm-2 control-label" for="input-option' + option['product_option_id'] + '">' + option['name'] + '</label>';*/
/* 					html += '  <div class="col-sm-10">';*/
/* 					html += '    <select name="option[' + option['product_option_id'] + ']" id="input-option' + option['product_option_id'] + '" class="form-control">';*/
/* 					html += '      <option value="">{{ text_select }}</option>';*/
/* */
/* 					for (j = 0; j < option['product_option_value'].length; j++) {*/
/* 						option_value = option['product_option_value'][j];*/
/* */
/* 						html += '<option value="' + option_value['product_option_value_id'] + '">' + option_value['name'];*/
/* */
/* 						if (option_value['price']) {*/
/* 							html += ' (' + option_value['price_prefix'] + option_value['price'] + ')';*/
/* 						}*/
/* */
/* 						html += '</option>';*/
/* 					}*/
/* */
/* 					html += '    </select>';*/
/* 					html += '  </div>';*/
/* 					html += '</div>';*/
/* 				}*/
/* */
/* 				if (option['type'] == 'text') {*/
/* 					html += '<div class="form-group' + (option['required'] ? ' required' : '') + '">';*/
/* 					html += '  <label class="col-sm-2 control-label" for="input-option' + option['product_option_id'] + '">' + option['name'] + '</label>';*/
/* 					html += '  <div class="col-sm-10"><input type="text" name="option[' + option['product_option_id'] + ']" value="' + option['value'] + '" id="input-option' + option['product_option_id'] + '" class="form-control" /></div>';*/
/* 					html += '</div>';*/
/* 				}*/
/* */
/* 				if (option['type'] == 'textarea') {*/
/* 					html += '<div class="form-group' + (option['required'] ? ' required' : '') + '">';*/
/* 					html += '  <label class="col-sm-2 control-label" for="input-option' + option['product_option_id'] + '">' + option['name'] + '</label>';*/
/* 					html += '  <div class="col-sm-10"><textarea name="option[' + option['product_option_id'] + ']" rows="5" id="input-option' + option['product_option_id'] + '" class="form-control">' + option['value'] + '</textarea></div>';*/
/* 					html += '</div>';*/
/* 				}*/
/* */
/* 				if (option['type'] == 'file') {*/
/* 					html += '<div class="form-group' + (option['required'] ? ' required' : '') + '">';*/
/* 					html += '  <label class="col-sm-2 control-label">' + option['name'] + '</label>';*/
/* 					html += '  <div class="col-sm-10">';*/
/* 					html += '    <button type="button" id="button-upload' + option['product_option_id'] + '" data-loading-text="{{ text_loading }}" class="btn btn-default"><i class="fa fa-upload"></i> {{ button_upload }}</button>';*/
/* 					html += '    <input type="hidden" name="option[' + option['product_option_id'] + ']" value="' + option['value'] + '" id="input-option' + option['product_option_id'] + '" />';*/
/* 					html += '  </div>';*/
/* 					html += '</div>';*/
/* 				}*/
/* */
/* 				if (option['type'] == 'date') {*/
/* 					html += '<div class="form-group' + (option['required'] ? ' required' : '') + '">';*/
/* 					html += '  <label class="col-sm-2 control-label" for="input-option' + option['product_option_id'] + '">' + option['name'] + '</label>';*/
/* 					html += '  <div class="col-sm-3"><div class="input-group date"><input type="text" name="option[' + option['product_option_id'] + ']" value="' + option['value'] + '" placeholder="' + option['name'] + '" data-date-format="YYYY-MM-DD" id="input-option' + option['product_option_id'] + '" class="form-control" /><span class="input-group-btn"><button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button></span></div></div>';*/
/* 					html += '</div>';*/
/* 				}*/
/* */
/* 				if (option['type'] == 'datetime') {*/
/* 					html += '<div class="form-group' + (option['required'] ? ' required' : '') + '">';*/
/* 					html += '  <label class="col-sm-2 control-label" for="input-option' + option['product_option_id'] + '">' + option['name'] + '</label>';*/
/* 					html += '  <div class="col-sm-3"><div class="input-group datetime"><input type="text" name="option[' + option['product_option_id'] + ']" value="' + option['value'] + '" placeholder="' + option['name'] + '" data-date-format="YYYY-MM-DD HH:mm" id="input-option' + option['product_option_id'] + '" class="form-control" /><span class="input-group-btn"><button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button></span></div></div>';*/
/* 					html += '</div>';*/
/* 				}*/
/* */
/* 				if (option['type'] == 'time') {*/
/* 					html += '<div class="form-group' + (option['required'] ? ' required' : '') + '">';*/
/* 					html += '  <label class="col-sm-2 control-label" for="input-option' + option['product_option_id'] + '">' + option['name'] + '</label>';*/
/* 					html += '  <div class="col-sm-3"><div class="input-group time"><input type="text" name="option[' + option['product_option_id'] + ']" value="' + option['value'] + '" placeholder="' + option['name'] + '" data-date-format="HH:mm" id="input-option' + option['product_option_id'] + '" class="form-control" /><span class="input-group-btn"><button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button></span></div></div>';*/
/* 					html += '</div>';*/
/* 				}*/
/* 			}*/
/* */
/* 			html += '</fieldset>';*/
/* */
/* 			$('#option').html(html);*/
/* */
/* 			$('.date').datetimepicker({*/
/* 				language: '{{ datepicker }}',*/
/* 				pickTime: false*/
/* 			});*/
/* */
/* 			$('.datetime').datetimepicker({*/
/* 				language: '{{ datepicker }}',*/
/* 				pickDate: true,*/
/* 				pickTime: true*/
/* 			});*/
/* */
/* 			$('.time').datetimepicker({*/
/* 				language: '{{ datepicker }}',*/
/* 				pickDate: false*/
/* 			});*/
/* 		} else {*/
/* 			$('#option').html('');*/
/* 		}*/
/* 	}*/
/* });*/
/* */
/* $('#button-product-add').on('click', function() {*/
/* 	$.ajax({*/
/* 		url: '{{ catalog }}index.php?route=api/cart/add&api_token={{ api_token }}&store_id=' + $('select[name=\'store_id\'] option:selected').val(),*/
/* 		type: 'post',*/
/* 		data: $('#tab-product input[name=\'product_id\'], #tab-product input[name=\'quantity\'], #tab-product input[name^=\'option\'][type=\'text\'], #tab-product input[name^=\'option\'][type=\'hidden\'], #tab-product input[name^=\'option\'][type=\'radio\']:checked, #tab-product input[name^=\'option\'][type=\'checkbox\']:checked, #tab-product select[name^=\'option\'], #tab-product textarea[name^=\'option\']'),*/
/* 		dataType: 'json',*/
/* 		crossDomain: true,*/
/* 		beforeSend: function() {*/
/* 			$('#button-product-add').button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-product-add').button('reset');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible, .text-danger').remove();*/
/* 			$('.form-group').removeClass('has-error');*/
/* */
/* 			if (json['error']) {*/
/* 				if (json['error']['warning']) {*/
/* 					$('#content > .container-fluid').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error']['warning'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* 				}*/
/* */
/* 				if (json['error']['option']) {*/
/* 					for (i in json['error']['option']) {*/
/* 						var element = $('#input-option' + i.replace('_', '-'));*/
/* */
/* 						if (element.parent().hasClass('input-group')) {*/
/* 							$(element).parent().after('<div class="text-danger">' + json['error']['option'][i] + '</div>');*/
/* 						} else {*/
/* 							$(element).after('<div class="text-danger">' + json['error']['option'][i] + '</div>');*/
/* 						}*/
/* 					}*/
/* 				}*/
/* */
/* 				if (json['error']['store']) {*/
/* 					$('#content > .container-fluid').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error']['store'] + '</div>');*/
/* 				}*/
/* */
/* 				// Highlight any found errors*/
/* 				$('.text-danger').parentsUntil('.form-group').parent().addClass('has-error');*/
/* 			} else {*/
/* 				// Refresh products, vouchers and totals*/
/* 				$('#button-refresh').trigger('click');*/
/* 			}*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* // Voucher*/
/* $('#button-voucher-add').on('click', function() {*/
/* 	$.ajax({*/
/* 		url: '{{ catalog }}index.php?route=api/voucher/add&api_token={{ api_token }}&store_id=' + $('select[name=\'store_id\'] option:selected').val(),*/
/* 		type: 'post',*/
/* 		data: $('#tab-voucher input[type=\'text\'], #tab-voucher input[type=\'hidden\'], #tab-voucher input[type=\'radio\']:checked, #tab-voucher input[type=\'checkbox\']:checked, #tab-voucher select, #tab-voucher textarea'),*/
/* 		dataType: 'json',*/
/* 		crossDomain: true,*/
/* 		beforeSend: function() {*/
/* 			$('#button-voucher-add').button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-voucher-add').button('reset');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible, .text-danger').remove();*/
/* 			$('.form-group').removeClass('has-error');*/
/* */
/* 			if (json['error']) {*/
/* 				if (json['error']['warning']) {*/
/* 					$('#content > .container-fluid').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error']['warning'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* 				}*/
/* */
/* 				for (i in json['error']) {*/
/* 					var element = $('#input-' + i.replace('_', '-'));*/
/* */
/* 					if (element.parent().hasClass('input-group')) {*/
/* 						$(element).parent().after('<div class="text-danger">' + json['error'][i] + '</div>');*/
/* 					} else {*/
/* 						$(element).after('<div class="text-danger">' + json['error'][i] + '</div>');*/
/* 					}*/
/* 				}*/
/* */
/* 				// Highlight any found errors*/
/* 				$('.text-danger').parentsUntil('.form-group').parent().addClass('has-error');*/
/* 			} else {*/
/* 				$('input[name=\'from_name\']').val('');*/
/* 				$('input[name=\'from_email\']').val('');*/
/* 				$('input[name=\'to_name\']').val('');*/
/* 				$('input[name=\'to_email\']').val('');*/
/* 				$('textarea[name=\'message\']').val('');*/
/* 				$('input[name=\'amount\']').val('{{ voucher_min|escape('js') }}');*/
/* */
/* 				// Refresh products, vouchers and totals*/
/* 				$('#button-refresh').trigger('click');*/
/* 			}*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* $('#cart').delegate('.btn-danger', 'click', function() {*/
/* 	var node = this;*/
/* */
/* 	$.ajax({*/
/* 		url: '{{ catalog }}index.php?route=api/cart/remove&api_token={{ api_token }}&store_id=' + $('select[name=\'store_id\'] option:selected').val(),*/
/* 		type: 'post',*/
/* 		data: 'key=' + encodeURIComponent(this.value),*/
/* 		dataType: 'json',*/
/* 		crossDomain: true,*/
/* 		beforeSend: function() {*/
/* 			$(node).button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$(node).button('reset');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible, .text-danger').remove();*/
/* */
/* 			// Check for errors*/
/* 			if (json['error']) {*/
/* 				$('#content > .container-fluid').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* 			} else {*/
/* 				// Refresh products, vouchers and totals*/
/* 				$('#button-refresh').trigger('click');*/
/* 			}*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* $('#cart').delegate('.btn-primary', 'click', function() {*/
/*     var node = this;*/
/* */
/*     // Refresh products, vouchers and totals*/
/*     $.ajax({*/
/*         url: '{{ catalog }}index.php?route=api/cart/add&api_token={{ api_token }}&store_id=' + $('select[name=\'store_id\'] option:selected').val(),*/
/*         type: 'post',*/
/*         data: $('#cart input[name^=\'product\'][type=\'text\'], #cart input[name^=\'product\'][type=\'hidden\'], #cart input[name^=\'product\'][type=\'radio\']:checked, #cart input[name^=\'product\'][type=\'checkbox\']:checked, #cart select[name^=\'product\'], #cart textarea[name^=\'product\']'),*/
/*         dataType: 'json',*/
/*         crossDomain: true,*/
/*         beforeSend: function() {*/
/*             $(node).button('loading');*/
/*         },*/
/*         complete: function() {*/
/*             $(node).button('reset');*/
/*         },*/
/*         success: function(json) {*/
/*             $('.alert-dismissible, .text-danger').remove();*/
/*             $('.form-group').removeClass('has-error');*/
/* */
/*             if (json['error'] && json['error']['warning']) {*/
/*                 $('#content > .container-fluid').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error']['warning'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/*             }*/
/* */
/*             if (json['success']) {*/
/* 				$('#content > .container-fluid').prepend('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* 			}*/
/*         },*/
/*         error: function(xhr, ajaxOptions, thrownError) {*/
/*             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*         }*/
/*     }).done(function() {*/
/*         $('#button-refresh').trigger('click');*/
/*     });*/
/* });*/
/* */
/* $('#button-cart').on('click', function() {*/
/* 	$('a[href=\'#tab-payment\']').tab('show');*/
/* });*/
/* */
/* // Payment Address*/
/* $('select[name=\'payment_address\']').on('change', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=customer/customer/address&user_token={{ user_token }}&address_id=' + this.value,*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$('select[name=\'payment_address\']').prop('disabled', true);*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('select[name=\'payment_address\']').prop('disabled', false);*/
/* 		},*/
/* 		success: function(json) {*/
/* 			// Reset all fields*/
/* 			$('#tab-payment input[type=\'text\'], #tab-payment input[type=\'text\'], #tab-payment textarea').val('');*/
/* 			$('#tab-payment select option').not('#tab-payment select[name=\'payment_address\']').removeAttr('selected');*/
/* 			$('#tab-payment input[type=\'checkbox\'], #tab-payment input[type=\'radio\']').removeAttr('checked');*/
/* */
/* 			$('#tab-payment input[name=\'firstname\']').val(json['firstname']);*/
/* 			$('#tab-payment input[name=\'lastname\']').val(json['lastname']);*/
/* 			$('#tab-payment input[name=\'company\']').val(json['company']);*/
/* 			$('#tab-payment input[name=\'address_1\']').val(json['address_1']);*/
/* 			$('#tab-payment input[name=\'address_2\']').val(json['address_2']);*/
/* 			$('#tab-payment input[name=\'city\']').val(json['city']);*/
/* 			$('#tab-payment input[name=\'postcode\']').val(json['postcode']);*/
/* 			$('#tab-payment select[name=\'country_id\']').val(json['country_id']);*/
/* */
/* 			payment_zone_id = json['zone_id'];*/
/* */
/* 			for (i in json['custom_field']) {*/
/* 				$('#tab-payment select[name=\'custom_field[' + i + ']\']').val(json['custom_field'][i]);*/
/* 				$('#tab-payment textarea[name=\'custom_field[' + i + ']\']').val(json['custom_field'][i]);*/
/* 				$('#tab-payment input[name^=\'custom_field[' + i + ']\'][type=\'text\']').val(json['custom_field'][i]);*/
/* 				$('#tab-payment input[name^=\'custom_field[' + i + ']\'][type=\'hidden\']').val(json['custom_field'][i]);*/
/* 				$('#tab-payment input[name^=\'custom_field[' + i + ']\'][type=\'radio\'][value=\'' + json['custom_field'][i] + '\']').prop('checked', true);*/
/* 				$('#tab-payment input[name^=\'custom_field[' + i + ']\'][type=\'checkbox\'][value=\'' + json['custom_field'][i] + '\']').prop('checked', true);*/
/* */
/* 				if (json['custom_field'][i] instanceof Array) {*/
/* 					for (j = 0; j < json['custom_field'][i].length; j++) {*/
/* 						$('#tab-payment input[name^=\'custom_field[' + i + ']\'][type=\'checkbox\'][value=\'' + json['custom_field'][i][j] + '\']').prop('checked', true);*/
/* 					}*/
/* 				}*/
/* 			}*/
/* */
/* 			$('#tab-payment select[name=\'country_id\']').trigger('change');*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* var payment_zone_id = '{{ payment_zone_id }}';*/
/* */
/* $('#tab-payment select[name=\'country_id\']').on('change', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=localisation/country/country&user_token={{ user_token }}&country_id=' + this.value,*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$('#tab-payment select[name=\'country_id\']').after(' <i class="fa fa-circle-o-notch fa-spin"></i>');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#tab-payment .fa-spin').remove();*/
/* 		},*/
/* 		success: function(json) {*/
/* 			if (json['postcode_required'] == '1') {*/
/* 				$('#tab-payment input[name=\'postcode\']').closest('.form-group').addClass('required');*/
/* 			} else {*/
/* 				$('#tab-payment input[name=\'postcode\']').closest('.form-group').removeClass('required');*/
/* 			}*/
/* */
/* 			html = '<option value="">{{ text_select }}</option>';*/
/* */
/* 			if (json['zone'] && json['zone'] != '') {*/
/* 				for (i = 0; i < json['zone'].length; i++) {*/
/*         			html += '<option value="' + json['zone'][i]['zone_id'] + '"';*/
/* */
/* 					if (json['zone'][i]['zone_id'] == payment_zone_id) {*/
/* 	      				html += ' selected="selected"';*/
/* 	    			}*/
/* */
/* 	    			html += '>' + json['zone'][i]['name'] + '</option>';*/
/* 				}*/
/* 			} else {*/
/* 				html += '<option value="0" selected="selected">{{ text_none }}</option>';*/
/* 			}*/
/* */
/* 			$('#tab-payment select[name=\'zone_id\']').html(html);*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* $('#tab-payment select[name=\'country_id\']').trigger('change');*/
/* */
/* $('#button-payment-address').on('click', function() {*/
/* 	$.ajax({*/
/* 		url: '{{ catalog }}index.php?route=api/payment/address&api_token={{ api_token }}&store_id=' + $('select[name=\'store_id\'] option:selected').val(),*/
/* 		type: 'post',*/
/* 		data: $('#tab-payment input[type=\'text\'], #tab-payment input[type=\'hidden\'], #tab-payment input[type=\'radio\']:checked, #tab-payment input[type=\'checkbox\']:checked, #tab-payment select, #tab-payment textarea'),*/
/* 		dataType: 'json',*/
/* 		crossDomain: true,*/
/* 		beforeSend: function() {*/
/* 			$('#button-payment-address').button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-payment-address').button('reset');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible, .text-danger').remove();*/
/* 			$('.form-group').removeClass('has-error');*/
/* */
/* 			// Check for errors*/
/* 			if (json['error']) {*/
/* 				if (json['error']['warning']) {*/
/* 					$('#content > .container-fluid').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error']['warning'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* 				}*/
/* */
/* 				for (i in json['error']) {*/
/* 					var element = $('#input-payment-' + i.replace('_', '-'));*/
/* */
/* 					if ($(element).parent().hasClass('input-group')) {*/
/* 						$(element).parent().after('<div class="text-danger">' + json['error'][i] + '</div>');*/
/* 					} else {*/
/* 						$(element).after('<div class="text-danger">' + json['error'][i] + '</div>');*/
/* 					}*/
/* 				}*/
/* */
/* 				// Highlight any found errors*/
/* 				$('.text-danger').parentsUntil('.form-group').parent().addClass('has-error');*/
/* 			} else {*/
/* 				// Payment Methods*/
/* 				$.ajax({*/
/* 					url: '{{ catalog }}index.php?route=api/payment/methods&api_token={{ api_token }}&store_id=' + $('select[name=\'store_id\'] option:selected').val(),*/
/* 					dataType: 'json',*/
/* 					crossDomain: true,*/
/* 					beforeSend: function() {*/
/* 						$('#button-payment-address').button('loading');*/
/* 					},*/
/* 					complete: function() {*/
/* 						$('#button-payment-address').button('reset');*/
/* 					},*/
/* 					success: function(json) {*/
/* 						if (json['error']) {*/
/* 							$('#content > .container-fluid').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* 						} else {*/
/* 							html = '<option value="">{{ text_select }}</option>';*/
/* */
/* 							if (json['payment_methods']) {*/
/* 								for (i in json['payment_methods']) {*/
/* 									if (json['payment_methods'][i]['code'] == $('select[name=\'payment_method\'] option:selected').val()) {*/
/* 										html += '<option value="' + json['payment_methods'][i]['code'] + '" selected="selected">' + json['payment_methods'][i]['title'] + '</option>';*/
/* 									} else {*/
/* 										html += '<option value="' + json['payment_methods'][i]['code'] + '">' + json['payment_methods'][i]['title'] + '</option>';*/
/* 									}*/
/* 								}*/
/* 							}*/
/* */
/* 							$('select[name=\'payment_method\']').html(html);*/
/* 						}*/
/* 					},*/
/* 					error: function(xhr, ajaxOptions, thrownError) {*/
/* 						alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 					}*/
/* 				}).done(function() {*/
/*                     // Refresh products, vouchers and totals*/
/*     				$('#button-refresh').trigger('click');*/
/* */
/*     				// If shipping required got to shipping tab else total tabs*/
/*     				if ($('select[name=\'shipping_method\']').prop('disabled')) {*/
/*     					$('a[href=\'#tab-total\']').tab('show');*/
/*     				} else {*/
/*     					$('a[href=\'#tab-shipping\']').tab('show');*/
/*     				}*/
/*                 });*/
/* 			}*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* // Shipping Address*/
/* $('select[name=\'shipping_address\']').on('change', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=customer/customer/address&user_token={{ user_token }}&address_id=' + this.value,*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$('select[name=\'shipping_address\']').prop('disabled', true);*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('select[name=\'shipping_address\']').prop('disabled', false);*/
/* 		},*/
/* 		success: function(json) {*/
/* 			// Reset all fields*/
/* 			$('#tab-shipping input[type=\'text\'], #tab-shipping input[type=\'text\'], #tab-shipping textarea').val('');*/
/* 			$('#tab-shipping select option').not('#tab-shipping select[name=\'shipping_address\']').removeAttr('selected');*/
/* 			$('#tab-shipping input[type=\'checkbox\'], #tab-shipping input[type=\'radio\']').removeAttr('checked');*/
/* */
/* 			$('#tab-shipping input[name=\'firstname\']').val(json['firstname']);*/
/* 			$('#tab-shipping input[name=\'lastname\']').val(json['lastname']);*/
/* 			$('#tab-shipping input[name=\'company\']').val(json['company']);*/
/* 			$('#tab-shipping input[name=\'address_1\']').val(json['address_1']);*/
/* 			$('#tab-shipping input[name=\'address_2\']').val(json['address_2']);*/
/* 			$('#tab-shipping input[name=\'city\']').val(json['city']);*/
/* 			$('#tab-shipping input[name=\'postcode\']').val(json['postcode']);*/
/* 			$('#tab-shipping select[name=\'country_id\']').val(json['country_id']);*/
/* */
/* 			shipping_zone_id = json['zone_id'];*/
/* */
/* 			for (i in json['custom_field']) {*/
/* 				$('#tab-shipping select[name=\'custom_field[' + i + ']\']').val(json['custom_field'][i]);*/
/* 				$('#tab-shipping textarea[name=\'custom_field[' + i + ']\']').val(json['custom_field'][i]);*/
/* 				$('#tab-shipping input[name^=\'custom_field[' + i + ']\'][type=\'text\']').val(json['custom_field'][i]);*/
/* 				$('#tab-shipping input[name^=\'custom_field[' + i + ']\'][type=\'hidden\']').val(json['custom_field'][i]);*/
/* 				$('#tab-shipping input[name^=\'custom_field[' + i + ']\'][type=\'radio\'][value=\'' + json['custom_field'][i] + '\']').prop('checked', true);*/
/* 				$('#tab-shipping input[name^=\'custom_field[' + i + ']\'][type=\'checkbox\'][value=\'' + json['custom_field'][i] + '\']').prop('checked', true);*/
/* */
/* 				if (json['custom_field'][i] instanceof Array) {*/
/* 					for (j = 0; j < json['custom_field'][i].length; j++) {*/
/* 						$('#tab-shipping input[name^=\'custom_field[' + i + ']\'][type=\'checkbox\'][value=\'' + json['custom_field'][i][j] + '\']').prop('checked', true);*/
/* 					}*/
/* 				}*/
/* 			}*/
/* */
/* 			$('#tab-shipping select[name=\'country_id\']').trigger('change');*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* var shipping_zone_id = '{{ shipping_zone_id }}';*/
/* */
/* $('#tab-shipping select[name=\'country_id\']').on('change', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=localisation/country/country&user_token={{ user_token }}&country_id=' + this.value,*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$('#tab-shipping select[name=\'country_id\']').prop('disabled', true);*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#tab-shipping select[name=\'country_id\']').prop('disabled', false);*/
/* 		},*/
/* 		success: function(json) {*/
/* 			if (json['postcode_required'] == '1') {*/
/* 				$('#tab-shipping input[name=\'postcode\']').closest('.form-group').addClass('required');*/
/* 			} else {*/
/* 				$('#tab-shipping input[name=\'postcode\']').closest('.form-group').removeClass('required');*/
/* 			}*/
/* */
/* 			html = '<option value="">{{ text_select }}</option>';*/
/* */
/* 			if (json['zone'] && json['zone'] != '') {*/
/* 				for (i = 0; i < json['zone'].length; i++) {*/
/*         			html += '<option value="' + json['zone'][i]['zone_id'] + '"';*/
/* */
/* 					if (json['zone'][i]['zone_id'] == shipping_zone_id) {*/
/* 	      				html += ' selected="selected"';*/
/* 	    			}*/
/* */
/* 	    			html += '>' + json['zone'][i]['name'] + '</option>';*/
/* 				}*/
/* 			} else {*/
/* 				html += '<option value="0" selected="selected">{{ text_none }}</option>';*/
/* 			}*/
/* */
/* 			$('#tab-shipping select[name=\'zone_id\']').html(html);*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* $('#tab-shipping select[name=\'country_id\']').trigger('change');*/
/* */
/* $('#button-shipping-address').on('click', function() {*/
/* 	$.ajax({*/
/* 		url: '{{ catalog }}index.php?route=api/shipping/address&api_token={{ api_token }}&store_id=' + $('select[name=\'store_id\'] option:selected').val(),*/
/* 		type: 'post',*/
/* 		data: $('#tab-shipping input[type=\'text\'], #tab-shipping input[type=\'hidden\'], #tab-shipping input[type=\'radio\']:checked, #tab-shipping input[type=\'checkbox\']:checked, #tab-shipping select, #tab-shipping textarea'),*/
/* 		dataType: 'json',*/
/* 		crossDomain: true,*/
/* 		beforeSend: function() {*/
/* 			$('#button-shipping-address').button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-shipping-address').button('reset');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible, .text-danger').remove();*/
/* 			$('.form-group').removeClass('has-error');*/
/* */
/* 			// Check for errors*/
/* 			if (json['error']) {*/
/* 				if (json['error']['warning']) {*/
/* 					$('#content > .container-fluid').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error']['warning'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* 				}*/
/* */
/* 				for (i in json['error']) {*/
/* 					var element = $('#input-shipping-' + i.replace('_', '-'));*/
/* */
/* 					if ($(element).parent().hasClass('input-group')) {*/
/* 						$(element).parent().after('<div class="text-danger">' + json['error'][i] + '</div>');*/
/* 					} else {*/
/* 						$(element).after('<div class="text-danger">' + json['error'][i] + '</div>');*/
/* 					}*/
/* 				}*/
/* */
/* 				// Highlight any found errors*/
/* 				$('.text-danger').parentsUntil('.form-group').parent().addClass('has-error');*/
/* 			} else {*/
/* 				// Shipping Methods*/
/* 				var request = $.ajax({*/
/* 					url: '{{ catalog }}index.php?route=api/shipping/methods&api_token={{ api_token }}&store_id=' + $('select[name=\'store_id\'] option:selected').val(),*/
/* 					dataType: 'json',*/
/* 					beforeSend: function() {*/
/* 						$('#button-shipping-address').button('loading');*/
/* 					},*/
/* 					complete: function() {*/
/* 						$('#button-shipping-address').button('reset');*/
/* 					},*/
/* 					success: function(json) {*/
/* 						if (json['error']) {*/
/* 							$('#content > .container-fluid').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* 						} else {*/
/* 							// Shipping Methods*/
/* 							html = '<option value="">{{ text_select }}</option>';*/
/* */
/* 							if (json['shipping_methods']) {*/
/* 								for (i in json['shipping_methods']) {*/
/* 									html += '<optgroup label="' + json['shipping_methods'][i]['title'] + '">';*/
/* */
/* 									if (!json['shipping_methods'][i]['error']) {*/
/* 										for (j in json['shipping_methods'][i]['quote']) {*/
/* 											if (json['shipping_methods'][i]['quote'][j]['code'] == $('select[name=\'shipping_method\'] option:selected').val()) {*/
/* 												html += '<option value="' + json['shipping_methods'][i]['quote'][j]['code'] + '" selected="selected">' + json['shipping_methods'][i]['quote'][j]['title'] + ' - ' + json['shipping_methods'][i]['quote'][j]['text'] + '</option>';*/
/* 											} else {*/
/* 												html += '<option value="' + json['shipping_methods'][i]['quote'][j]['code'] + '">' + json['shipping_methods'][i]['quote'][j]['title'] + ' - ' + json['shipping_methods'][i]['quote'][j]['text'] + '</option>';*/
/* 											}*/
/* 										}*/
/* 									} else {*/
/* 										html += '<option value="" style="color: #F00;" disabled="disabled">' + json['shipping_method'][i]['error'] + '</option>';*/
/* 									}*/
/* */
/* 									html += '</optgroup>';*/
/* 								}*/
/* 							}*/
/* */
/* 							$('select[name=\'shipping_method\']').html(html);*/
/* 						}*/
/* 					},*/
/* 					error: function(xhr, ajaxOptions, thrownError) {*/
/* 						alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 					}*/
/* 				}).done(function() {*/
/* 				    // Refresh products, vouchers and totals*/
/* 				    $('#button-refresh').trigger('click');*/
/* */
/*                     $('a[href=\'#tab-total\']').tab('show');*/
/*                 });*/
/* 			}*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* // Shipping Method*/
/* $('#button-shipping-method').on('click', function() {*/
/* 	$.ajax({*/
/* 		url: '{{ catalog }}index.php?route=api/shipping/method&api_token={{ api_token }}&store_id=' + $('select[name=\'store_id\'] option:selected').val(),*/
/* 		type: 'post',*/
/* 		data: 'shipping_method=' + $('select[name=\'shipping_method\'] option:selected').val(),*/
/* 		dataType: 'json',*/
/* 		crossDomain: true,*/
/* 		beforeSend: function() {*/
/* 			$('#button-shipping-method').button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-shipping-method').button('reset');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible, .text-danger').remove();*/
/* 			$('.form-group').removeClass('has-error');*/
/* */
/* 			if (json['error']) {*/
/* 				$('#content > .container-fluid').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* */
/* 				// Highlight any found errors*/
/* 				$('select[name=\'shipping_method\']').closest('.form-group').addClass('has-error');*/
/* 			}*/
/* */
/* 			if (json['success']) {*/
/* 				$('#content > .container-fluid').prepend('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* */
/* 				// Refresh products, vouchers and totals*/
/* 				$('#button-refresh').trigger('click');*/
/* 			}*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* // Payment Method*/
/* $('#button-payment-method').on('click', function() {*/
/* 	$.ajax({*/
/* 		url: '{{ catalog }}index.php?route=api/payment/method&api_token={{ api_token }}&store_id=' + $('select[name=\'store_id\'] option:selected').val(),*/
/* 		type: 'post',*/
/* 		data: 'payment_method=' + $('select[name=\'payment_method\'] option:selected').val(),*/
/* 		dataType: 'json',*/
/* 		crossDomain: true,*/
/* 		beforeSend: function() {*/
/* 			$('#button-payment-method').button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-payment-method').button('reset');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible, .text-danger').remove();*/
/* 			$('.form-group').removeClass('has-error');*/
/* */
/* 			if (json['error']) {*/
/* 				$('#content > .container-fluid').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* */
/* 				// Highlight any found errors*/
/* 				$('select[name=\'payment_method\']').closest('.form-group').addClass('has-error');*/
/* 			}*/
/* */
/* 			if (json['success']) {*/
/* 				$('#content > .container-fluid').prepend('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* */
/* 				// Refresh products, vouchers and totals*/
/* 				$('#button-refresh').trigger('click');*/
/* 			}*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* // Coupon*/
/* $('#button-coupon').on('click', function() {*/
/* 	$.ajax({*/
/* 		url: '{{ catalog }}index.php?route=api/coupon&api_token={{ api_token }}&store_id=' + $('select[name=\'store_id\'] option:selected').val(),*/
/* 		type: 'post',*/
/* 		data: 'coupon=' + $('input[name=\'coupon\']').val(),*/
/* 		dataType: 'json',*/
/* 		crossDomain: true,*/
/* 		beforeSend: function() {*/
/* 			$('#button-coupon').button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-coupon').button('reset');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible, .text-danger').remove();*/
/* 			$('.form-group').removeClass('has-error');*/
/* */
/* 			if (json['error']) {*/
/* 				$('#content > .container-fluid').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* */
/* 				// Highlight any found errors*/
/* 				$('input[name=\'coupon\']').closest('.form-group').addClass('has-error');*/
/* 			}*/
/* */
/* 			if (json['success']) {*/
/* 				$('#content > .container-fluid').prepend('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* */
/* 				// Refresh products, vouchers and totals*/
/* 				$('#button-refresh').trigger('click');*/
/* 			}*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* // Voucher*/
/* $('#button-voucher').on('click', function() {*/
/* 	$.ajax({*/
/* 		url: '{{ catalog }}index.php?route=api/voucher&api_token={{ api_token }}&store_id=' + $('select[name=\'store_id\'] option:selected').val(),*/
/* 		type: 'post',*/
/* 		data: 'voucher=' + $('input[name=\'voucher\']').val(),*/
/* 		dataType: 'json',*/
/* 		crossDomain: true,*/
/* 		beforeSend: function() {*/
/* 			$('#button-voucher').button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-voucher').button('reset');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible, .text-danger').remove();*/
/* 			$('.form-group').removeClass('has-error');*/
/* */
/* 			if (json['error']) {*/
/* 				$('#content > .container-fluid').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* */
/* 				// Highlight any found errors*/
/* 				$('input[name=\'voucher\']').closest('.form-group').addClass('has-error');*/
/* 			}*/
/* */
/* 			if (json['success']) {*/
/* 				$('#content > .container-fluid').prepend('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* */
/* 				// Refresh products, vouchers and totals*/
/* 				$('#button-refresh').trigger('click');*/
/* 			}*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* // Reward*/
/* $('#button-reward').on('click', function() {*/
/* 	$.ajax({*/
/* 		url: '{{ catalog }}index.php?route=api/reward&api_token={{ api_token }}&store_id=' + $('select[name=\'store_id\'] option:selected').val(),*/
/* 		type: 'post',*/
/* 		data: 'reward=' + $('input[name=\'reward\']').val(),*/
/* 		dataType: 'json',*/
/* 		crossDomain: true,*/
/* 		beforeSend: function() {*/
/* 			$('#button-reward').button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-reward').button('reset');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible, .text-danger').remove();*/
/* 			$('.form-group').removeClass('has-error');*/
/* */
/* 			if (json['error']) {*/
/* 				$('#content > .container-fluid').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* */
/* 				// Highlight any found errors*/
/* 				$('input[name=\'reward\']').closest('.form-group').addClass('has-error');*/
/* 			}*/
/* */
/* 			if (json['success']) {*/
/* 				$('#content > .container-fluid').prepend('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* */
/* 				// Refresh products, vouchers and totals*/
/* 				$('#button-refresh').trigger('click');*/
/* 			}*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* // Affiliate*/
/* $('input[name=\'affiliate\']').autocomplete({*/
/* 	'source': function(request, response) {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=customer/customer/autocomplete&user_token={{ user_token }}&filter_affiliate=1&filter_name=' +  encodeURIComponent(request),*/
/* 			dataType: 'json',*/
/* 			success: function(json) {*/
/* 				json.unshift({*/
/* 					customer_id: 0,*/
/* 					name: '{{ text_none }}'*/
/* 				});*/
/* */
/* 				response($.map(json, function(item) {*/
/* 					return {*/
/* 						label: item['name'],*/
/* 						value: item['customer_id']*/
/* 					}*/
/* 				}));*/
/* 			}*/
/* 		});*/
/* 	},*/
/* 	'select': function(item) {*/
/* 		$('input[name=\'affiliate\']').val(item['label']);*/
/* 		$('input[name=\'affiliate_id\']').val(item['value']);*/
/* 	}*/
/* });*/
/* */
/* // Checkout*/
/* $('#button-save').on('click', function() {*/
/* 	if ($('input[name=\'order_id\']').val() == 0) {*/
/* 		var url = '{{ catalog }}index.php?route=api/order/add&api_token={{ api_token }}&store_id=' + $('select[name=\'store_id\'] option:selected').val();*/
/* 	} else {*/
/* 		var url = '{{ catalog }}index.php?route=api/order/edit&api_token={{ api_token }}&store_id=' + $('select[name=\'store_id\'] option:selected').val() + '&order_id=' + $('input[name=\'order_id\']').val();*/
/* 	}*/
/* */
/* 	$.ajax({*/
/* 		url: url,*/
/* 		type: 'post',*/
/* 		data: $('select[name=\'payment_method\'] option:selected, select[name=\'shipping_method\'] option:selected,  #tab-total select[name=\'order_status_id\'], #tab-total select, textarea[name=\'comment\'], input[name=\'affiliate_id\']'),*/
/* 		dataType: 'json',*/
/* 		crossDomain: true,*/
/* 		beforeSend: function() {*/
/* 			$('#button-save').button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-save').button('reset');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible, .text-danger').remove();*/
/* */
/* 			if (json['error']) {*/
/* 				$('#content > .container-fluid').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* 			}*/
/* */
/* 			if (json['success']) {*/
/* 				$('#content > .container-fluid').prepend('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + '  <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/*             }*/
/* */
/* 			if (json['order_id']) {*/
/* 				$('input[name=\'order_id\']').val(json['order_id']);*/
/* 			}*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* $('#content').delegate('button[id^=\'button-upload\'], button[id^=\'button-custom-field\'], button[id^=\'button-payment-custom-field\'], button[id^=\'button-shipping-custom-field\']', 'click', function() {*/
/* 	var node = this;*/
/* */
/* 	$('#form-upload').remove();*/
/* */
/* 	$('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file" /></form>');*/
/* */
/* 	$('#form-upload input[name=\'file\']').trigger('click');*/
/* */
/* 	if (typeof timer != 'undefined') {*/
/*     	clearInterval(timer);*/
/* 	}*/
/* */
/* 	timer = setInterval(function() {*/
/* 		if ($('#form-upload input[name=\'file\']').val() != '') {*/
/* 			clearInterval(timer);*/
/* */
/* 			$.ajax({*/
/* 				url: 'index.php?route=tool/upload/upload&user_token={{ user_token }}',*/
/* 				type: 'post',*/
/* 				dataType: 'json',*/
/* 				data: new FormData($('#form-upload')[0]),*/
/* 				cache: false,*/
/* 				contentType: false,*/
/* 				processData: false,*/
/* 				beforeSend: function() {*/
/* 					$(node).button('loading');*/
/* 				},*/
/* 				complete: function() {*/
/* 					$(node).button('reset');*/
/* 				},*/
/* 				success: function(json) {*/
/* 					$(node).parent().find('.text-danger').remove();*/
/* */
/* 					if (json['error']) {*/
/* 						$(node).parent().find('input[type=\'hidden\']').after('<div class="text-danger">' + json['error'] + '</div>');*/
/* 					}*/
/* */
/* 					if (json['success']) {*/
/* 						alert(json['success']);*/
/* 					}*/
/* */
/* 					if (json['code']) {*/
/* 						$(node).parent().find('input[type=\'hidden\']').val(json['code']);*/
/* 					}*/
/* 				},*/
/* 				error: function(xhr, ajaxOptions, thrownError) {*/
/* 					alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 				}*/
/* 			});*/
/* 		}*/
/* 	}, 500);*/
/* });*/
/* */
/* $('.date').datetimepicker({*/
/* 	language: '{{ datepicker }}',*/
/* 	pickTime: false*/
/* });*/
/* */
/* $('.datetime').datetimepicker({*/
/* 	language: '{{ datepicker }}',*/
/* 	pickDate: true,*/
/* 	pickTime: true*/
/* });*/
/* */
/* $('.time').datetimepicker({*/
/* 	language: '{{ datepicker }}',*/
/* 	pickDate: false*/
/* });*/
/* //--></script>*/
/*   <script type="text/javascript"><!--*/
/* // Sort the custom fields*/
/* $('#tab-customer .form-group[data-sort]').detach().each(function() {*/
/* 	if ($(this).attr('data-sort') >= 0 && $(this).attr('data-sort') <= $('#tab-customer .form-group').length) {*/
/* 		$('#tab-customer .form-group').eq($(this).attr('data-sort')).before(this);*/
/* 	}*/
/* */
/* 	if ($(this).attr('data-sort') > $('#tab-customer .form-group').length) {*/
/* 		$('#tab-customer .form-group:last').after(this);*/
/* 	}*/
/* */
/* 	if ($(this).attr('data-sort') < -$('#tab-customer .form-group').length) {*/
/* 		$('#tab-customer .form-group:first').before(this);*/
/* 	}*/
/* });*/
/* */
/* // Sort the custom fields*/
/* $('#tab-payment .form-group[data-sort]').detach().each(function() {*/
/* 	if ($(this).attr('data-sort') >= 0 && $(this).attr('data-sort') <= $('#tab-payment .form-group').length) {*/
/* 		$('#tab-payment .form-group').eq($(this).attr('data-sort')).before(this);*/
/* 	}*/
/* */
/* 	if ($(this).attr('data-sort') > $('#tab-payment .form-group').length) {*/
/* 		$('#tab-payment .form-group:last').after(this);*/
/* 	}*/
/* */
/* 	if ($(this).attr('data-sort') < -$('#tab-payment .form-group').length) {*/
/* 		$('#tab-payment .form-group:first').before(this);*/
/* 	}*/
/* });*/
/* */
/* $('#tab-shipping .form-group[data-sort]').detach().each(function() {*/
/* 	if ($(this).attr('data-sort') >= 0 && $(this).attr('data-sort') <= $('#tab-shipping .form-group').length) {*/
/* 		$('#tab-shipping .form-group').eq($(this).attr('data-sort')).before(this);*/
/* 	}*/
/* */
/* 	if ($(this).attr('data-sort') > $('#tab-shipping .form-group').length) {*/
/* 		$('#tab-shipping .form-group:last').after(this);*/
/* 	}*/
/* */
/* 	if ($(this).attr('data-sort') < -$('#tab-shipping .form-group').length) {*/
/* 		$('#tab-shipping .form-group:first').before(this);*/
/* 	}*/
/* });*/
/* */
/* // Add all products to the cart using the api*/
/* $('#button-refresh').on('click', function() {*/
/* 	$.ajax({*/
/* 		url: '{{ catalog }}index.php?route=api/cart/products&api_token={{ api_token }}&store_id=' + $('select[name=\'store_id\'] option:selected').val(),*/
/* 		dataType: 'json',*/
/* 		crossDomain: true,*/
/* 		beforeSend: function() {*/
/* 			$('#button-refresh').button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-refresh').button('reset');*/
/* 		},		*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible').remove();*/
/* */
/* 			// Check for errors*/
/* 			if (json['error']) {*/
/* 				if (json['error']['warning']) {*/
/* 					$('#content > .container-fluid').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error']['warning'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* 				}*/
/* */
/* 				if (json['error']['stock']) {*/
/* 					$('#content > .container-fluid').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error']['stock'] + '</div>');*/
/* 				}*/
/* */
/* 				if (json['error']['minimum']) {*/
/* 					for (i in json['error']['minimum']) {*/
/* 						$('#content > .container-fluid').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error']['minimum'][i] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* 					}*/
/* 				}*/
/* 			}*/
/* */
/* 			var shipping = false;*/
/* */
/* 			html = '';*/
/* */
/* 			if (json['products'].length) {*/
/* 				for (i = 0; i < json['products'].length; i++) {*/
/* 					product = json['products'][i];*/
/* */
/* 					html += '<tr>';*/
/* 					html += '  <td class="text-left">' + product['name'] + ' ' + (!product['stock'] ? '<span class="text-danger">***</span>' : '') + '<br />';*/
/* 					html += '  <input type="hidden" name="product[' + i + '][product_id]" value="' + product['product_id'] + '" />';*/
/* */
/* 					if (product['option']) {*/
/* 						for (j = 0; j < product['option'].length; j++) {*/
/* 							option = product['option'][j];*/
/* */
/* 							html += '  - <small>' + option['name'] + ': ' + option['value'] + '</small><br />';*/
/* */
/* 							if (option['type'] == 'select' || option['type'] == 'radio' || option['type'] == 'image') {*/
/* 								html += '<input type="hidden" name="product[' + i + '][option][' + option['product_option_id'] + ']" value="' + option['product_option_value_id'] + '" />';*/
/* 							}*/
/* */
/* 							if (option['type'] == 'checkbox') {*/
/* 								html += '<input type="hidden" name="product[' + i + '][option][' + option['product_option_id'] + '][]" value="' + option['product_option_value_id'] + '" />';*/
/* 							}*/
/* */
/* 							if (option['type'] == 'text' || option['type'] == 'textarea' || option['type'] == 'file' || option['type'] == 'date' || option['type'] == 'datetime' || option['type'] == 'time') {*/
/* 								html += '<input type="hidden" name="product[' + i + '][option][' + option['product_option_id'] + ']" value="' + option['value'] + '" />';*/
/* 							}*/
/* 						}*/
/* 					}*/
/* */
/* 					html += '</td>';*/
/* 					html += '  <td class="text-left">' + product['model'] + '</td>';*/
/*           //CIS*/
/*             {% if shipping_code == 'my_parcel.my_parcel' %}*/
/*           html += '  <td class="text-left"><div class="input-group btn-block" style="max-width: 200px;"><input type="text" name="product[' + i + '][squantity]" value="' + product['squantity'] + '" class="form-control" /><span class="input-group-btn"><button type="button" data-toggle="tooltip" title="{{ button_refresh }}" data-loading-text="{{ text_loading }}" class="btn btn-primary"><i class="fa fa-refresh"></i></button></span></div><input type="hidden" name="product[' + i + '][squantity1]" value="' + product['squantity'] + '" class="form-control" /></td>';*/
/*           {% endif %}*/
/* 					html += '  <td class="text-right"><div class="input-group btn-block" style="max-width: 200px;"><input type="text" name="product[' + i + '][quantity]" value="' + product['quantity'] + '" class="form-control" /><span class="input-group-btn"><button type="button" data-toggle="tooltip" title="{{ button_refresh }}" data-loading-text="{{ text_loading }}" class="btn btn-primary"><i class="fa fa-refresh"></i></button></span></div></td>';*/
/*                     html += '  <td class="text-right">' + product['price'] + '</td>';*/
/* 					html += '  <td class="text-right">' + product['total'] + '</td>';*/
/* 					html += '  <td class="text-center" style="width: 3px;"><button type="button" value="' + product['cart_id'] + '" data-toggle="tooltip" title="{{ button_remove }}" data-loading-text="{{ text_loading }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>';*/
/* 					html += '</tr>';*/
/* */
/* 					if (product['shipping'] != 0) {*/
/* 						shipping = true;*/
/* 					}*/
/* 				}*/
/* 			}*/
/* */
/* 			if (!shipping) {*/
/* 				$('select[name=\'shipping_method\'] option').removeAttr('selected');*/
/* 				$('select[name=\'shipping_method\']').prop('disabled', true);*/
/* 				$('#button-shipping-method').prop('disabled', true);*/
/* 			} else {*/
/* 				$('select[name=\'shipping_method\']').prop('disabled', false);*/
/* 				$('#button-shipping-method').prop('disabled', false);*/
/* 			}*/
/* */
/* 			if (json['vouchers'].length) {*/
/* 				for (i in json['vouchers']) {*/
/* 					voucher = json['vouchers'][i];*/
/* */
/* 					html += '<tr>';*/
/* 					html += '  <td class="text-left">' + voucher['description'];*/
/*                     html += '    <input type="hidden" name="voucher[' + i + '][code]" value="' + voucher['code'] + '" />';*/
/* 					html += '    <input type="hidden" name="voucher[' + i + '][description]" value="' + voucher['description'] + '" />';*/
/*                     html += '    <input type="hidden" name="voucher[' + i + '][from_name]" value="' + voucher['from_name'] + '" />';*/
/*                     html += '    <input type="hidden" name="voucher[' + i + '][from_email]" value="' + voucher['from_email'] + '" />';*/
/*                     html += '    <input type="hidden" name="voucher[' + i + '][to_name]" value="' + voucher['to_name'] + '" />';*/
/*                     html += '    <input type="hidden" name="voucher[' + i + '][to_email]" value="' + voucher['to_email'] + '" />';*/
/*                     html += '    <input type="hidden" name="voucher[' + i + '][voucher_theme_id]" value="' + voucher['voucher_theme_id'] + '" />';*/
/*                     html += '    <input type="hidden" name="voucher[' + i + '][message]" value="' + voucher['message'] + '" />';*/
/*                     html += '    <input type="hidden" name="voucher[' + i + '][amount]" value="' + voucher['amount'] + '" />';*/
/* 					html += '  </td>';*/
/* 					html += '  <td class="text-left"></td>';*/
/* 					html += '  <td class="text-right">1</td>';*/
/* 					html += '  <td class="text-right">' + voucher['price'] + '</td>';*/
/* 					html += '  <td class="text-right">' + voucher['price'] + '</td>';*/
/* 					html += '  <td class="text-center" style="width: 3px;"><button type="button" value="' + voucher['code'] + '" data-toggle="tooltip" title="{{ button_remove }}" data-loading-text="{{ text_loading }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>';*/
/* 					html += '</tr>';*/
/* 				}*/
/* 			}*/
/* */
/* 			if (!json['products'].length && !json['vouchers'].length) {*/
/* 				html += '<tr>';*/
/* 				html += '  <td colspan="6" class="text-center">{{ text_no_results }}</td>';*/
/* 				html += '</tr>';*/
/* 			}*/
/* */
/* 			$('#cart').html(html);*/
/* */
/* 			// Totals*/
/* 			html = '';*/
/* */
/* 			if (json['products'].length) {*/
/* 				for (i = 0; i < json['products'].length; i++) {*/
/* 					product = json['products'][i];*/
/* */
/* 					html += '<tr>';*/
/* 					html += '  <td class="text-left">' + product['name'] + ' ' + (!product['stock'] ? '<span class="text-danger">***</span>' : '') + '<br />';*/
/* */
/* 					if (product['option']) {*/
/* 						for (j = 0; j < product['option'].length; j++) {*/
/* 							option = product['option'][j];*/
/* */
/* 							html += '  - <small>' + option['name'] + ': ' + option['value'] + '</small><br />';*/
/* 						}*/
/* 					}*/
/* */
/* 					html += '  </td>';*/
/* 					html += '  <td class="text-left">' + product['model'] + '</td>';*/
/*           html += '  <td class="text-left">' + product['quantity'] + '</td>';*/
/* 					html += '  <td class="text-right">' + product['price'] + '</td>';*/
/* 					html += '  <td class="text-right">' + product['total'] + '</td>';*/
/* 					html += '</tr>';*/
/* 				}*/
/* 			}*/
/* */
/* 			if (json['vouchers'].length) {*/
/* 				for (i in json['vouchers']) {*/
/* 					voucher = json['vouchers'][i];*/
/* */
/* 					html += '<tr>';*/
/* 					html += '  <td class="text-left">' + voucher['description'] + '</td>';*/
/* 					html += '  <td class="text-left"></td>';*/
/* 					html += '  <td class="text-right">1</td>';*/
/* 					html += '  <td class="text-right">' + voucher['amount'] + '</td>';*/
/* 					html += '  <td class="text-right">' + voucher['amount'] + '</td>';*/
/* 					html += '</tr>';*/
/* 				}*/
/* 			}*/
/* */
/* 			if (json['totals'].length) {*/
/* 				for (i in json['totals']) {*/
/* 					total = json['totals'][i];*/
/* */
/* 					html += '<tr>';*/
/* 					html += '  <td class="text-right" colspan="4">' + total['title'] + ':</td>';*/
/* 					html += '  <td class="text-right">' + total['text'] + '</td>';*/
/* 					html += '</tr>';*/
/* 				}*/
/* 			}*/
/* */
/* 			if (!json['totals'].length && !json['products'].length && !json['vouchers'].length) {*/
/* 				html += '<tr>';*/
/* 				html += '  <td colspan="5" class="text-center">{{ text_no_results }}</td>';*/
/* 				html += '</tr>';*/
/* 			}*/
/* */
/* 			$('#total').html(html);*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* //--></script></div>*/
/* {{ footer }}*/
/* */
