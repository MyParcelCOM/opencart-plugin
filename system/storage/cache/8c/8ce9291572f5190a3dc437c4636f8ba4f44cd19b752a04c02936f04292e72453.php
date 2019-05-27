<?php

/* sale/order_list.twig */
class __TwigTemplate_d855f388b4ec180516640bab53e5fef681212400ccb218d1bf56ccbf6e4f3fe9 extends Twig_Template
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
    <div class=\"pull-right\">
      <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_filter"]) ? $context["button_filter"] : null);
        echo "\" onclick=\"\$('#filter-order').toggleClass('hidden-sm hidden-xs');\" class=\"btn btn-default hidden-md hidden-lg\"><i class=\"fa fa-filter\"></i></button>
      <button type=\"submit\" id=\"button-shipping\" form=\"form-order\" formaction=\"";
        // line 7
        echo (isset($context["shipping"]) ? $context["shipping"] : null);
        echo "\" formtarget=\"_blank\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_shipping_print"]) ? $context["button_shipping_print"] : null);
        echo "\" class=\"btn btn-info\"><i class=\"fa fa-truck\"></i></button>
      <button type=\"submit\" id=\"button-invoice\" form=\"form-order\" formaction=\"";
        // line 8
        echo (isset($context["invoice"]) ? $context["invoice"] : null);
        echo "\" formtarget=\"_blank\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_invoice_print"]) ? $context["button_invoice_print"] : null);
        echo "\" class=\"btn btn-info\"><i class=\"fa fa-print\"></i></button>
      <a href=\"";
        // line 9
        echo (isset($context["add"]) ? $context["add"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_add"]) ? $context["button_add"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
      <!-- CIS -->
       <button type=\"submit\" id=\"mp_export\" form=\"form-order\" formaction=\"";
        // line 11
        echo (isset($context["export"]) ? $context["export"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"Export to Myparcel\" class=\"btn btn-info\"><i class=\"fa fa-download\"></i></button>
 
      <!-- CIS -->
       </div>
    <h1>";
        // line 15
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
    <ul class=\"breadcrumb\">
      ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 18
            echo "      <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "    </ul>
  </div>
</div>
<div class=\"container-fluid\">";
        // line 23
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 24
            echo "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 28
        echo "  ";
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 29
            echo "  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 33
        echo "  <div class=\"row\">
    <div id=\"filter-order\" class=\"col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs\">
      <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
          <h3 class=\"panel-title\"><i class=\"fa fa-filter\"></i> ";
        // line 37
        echo (isset($context["text_filter"]) ? $context["text_filter"] : null);
        echo "</h3>
        </div>
        <div class=\"panel-body\">
          <div class=\"form-group\">
            <label class=\"control-label\" for=\"input-order-id\">";
        // line 41
        echo (isset($context["entry_order_id"]) ? $context["entry_order_id"] : null);
        echo "</label>
            <input type=\"text\" name=\"filter_order_id\" value=\"";
        // line 42
        echo (isset($context["filter_order_id"]) ? $context["filter_order_id"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_order_id"]) ? $context["entry_order_id"] : null);
        echo "\" id=\"input-order-id\" class=\"form-control\" />
          </div>
          <div class=\"form-group\">
            <label class=\"control-label\" for=\"input-customer\">";
        // line 45
        echo (isset($context["entry_customer"]) ? $context["entry_customer"] : null);
        echo "</label>
            <input type=\"text\" name=\"filter_customer\" value=\"";
        // line 46
        echo (isset($context["filter_customer"]) ? $context["filter_customer"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_customer"]) ? $context["entry_customer"] : null);
        echo "\" id=\"input-customer\" class=\"form-control\" />
          </div>
          <div class=\"form-group\">
            <label class=\"control-label\" for=\"input-order-status\">";
        // line 49
        echo (isset($context["entry_order_status"]) ? $context["entry_order_status"] : null);
        echo "</label>
            <select name=\"filter_order_status_id\" id=\"input-order-status\" class=\"form-control\">
              <option value=\"\"></option>
              
              ";
        // line 53
        if (((isset($context["filter_order_status_id"]) ? $context["filter_order_status_id"] : null) == "0")) {
            // line 54
            echo "              
              <option value=\"0\" selected=\"selected\">";
            // line 55
            echo (isset($context["text_missing"]) ? $context["text_missing"] : null);
            echo "</option>
              
              ";
        } else {
            // line 58
            echo "              
              <option value=\"0\">";
            // line 59
            echo (isset($context["text_missing"]) ? $context["text_missing"] : null);
            echo "</option>
              
              ";
        }
        // line 62
        echo "              ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 63
            echo "              ";
            if (($this->getAttribute($context["order_status"], "order_status_id", array()) == (isset($context["filter_order_status_id"]) ? $context["filter_order_status_id"] : null))) {
                // line 64
                echo "              
              <option value=\"";
                // line 65
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
              
              ";
            } else {
                // line 68
                echo "              
              <option value=\"";
                // line 69
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
              
              ";
            }
            // line 72
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "            
            </select>
          </div>
          <div class=\"form-group\">
            <label class=\"control-label\" for=\"input-total\">";
        // line 77
        echo (isset($context["entry_total"]) ? $context["entry_total"] : null);
        echo "</label>
            <input type=\"text\" name=\"filter_total\" value=\"";
        // line 78
        echo (isset($context["filter_total"]) ? $context["filter_total"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_total"]) ? $context["entry_total"] : null);
        echo "\" id=\"input-total\" class=\"form-control\" />
          </div>
          <div class=\"form-group\">
            <label class=\"control-label\" for=\"input-date-added\">";
        // line 81
        echo (isset($context["entry_date_added"]) ? $context["entry_date_added"] : null);
        echo "</label>
            <div class=\"input-group date\">
              <input type=\"text\" name=\"filter_date_added\" value=\"";
        // line 83
        echo (isset($context["filter_date_added"]) ? $context["filter_date_added"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_date_added"]) ? $context["entry_date_added"] : null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-added\" class=\"form-control\" />
              <span class=\"input-group-btn\">
              <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
              </span> </div>
          </div>
          <div class=\"form-group\">
            <label class=\"control-label\" for=\"input-date-modified\">";
        // line 89
        echo (isset($context["entry_date_modified"]) ? $context["entry_date_modified"] : null);
        echo "</label>
            <div class=\"input-group date\">
              <input type=\"text\" name=\"filter_date_modified\" value=\"";
        // line 91
        echo (isset($context["filter_date_modified"]) ? $context["filter_date_modified"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_date_modified"]) ? $context["entry_date_modified"] : null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-modified\" class=\"form-control\" />
              <span class=\"input-group-btn\">
              <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
              </span> </div>
          </div>
          <div class=\"form-group text-right\">
            <button type=\"button\" id=\"button-filter\" class=\"btn btn-default\"><i class=\"fa fa-filter\"></i> ";
        // line 97
        echo (isset($context["button_filter"]) ? $context["button_filter"] : null);
        echo "</button>
          </div>
        </div>
      </div>
    </div>
    <div class=\"col-md-9 col-md-pull-3 col-sm-12\">
      <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
          <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 105
        echo (isset($context["text_list"]) ? $context["text_list"] : null);
        echo "</h3>
        </div>
        <div class=\"panel-body\">
          <form method=\"post\" action=\"\" enctype=\"multipart/form-data\" id=\"form-order\">
            <div class=\"table-responsive\">
              <table class=\"table table-bordered table-hover\">
                <thead>
                  <tr>
                    <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                    <td class=\"text-right\">";
        // line 114
        if (((isset($context["sort"]) ? $context["sort"] : null) == "o.order_id")) {
            echo " <a href=\"";
            echo (isset($context["sort_order"]) ? $context["sort_order"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_order_id"]) ? $context["column_order_id"] : null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo (isset($context["sort_order"]) ? $context["sort_order"] : null);
            echo "\">";
            echo (isset($context["column_order_id"]) ? $context["column_order_id"] : null);
            echo "</a> ";
        }
        echo "</td>
                    <td class=\"text-left\">";
        // line 115
        if (((isset($context["sort"]) ? $context["sort"] : null) == "customer")) {
            echo " <a href=\"";
            echo (isset($context["sort_customer"]) ? $context["sort_customer"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_customer"]) ? $context["column_customer"] : null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo (isset($context["sort_customer"]) ? $context["sort_customer"] : null);
            echo "\">";
            echo (isset($context["column_customer"]) ? $context["column_customer"] : null);
            echo "</a> ";
        }
        echo "</td>
                    <td class=\"text-left\">";
        // line 116
        if (((isset($context["sort"]) ? $context["sort"] : null) == "order_status")) {
            echo " <a href=\"";
            echo (isset($context["sort_status"]) ? $context["sort_status"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_status"]) ? $context["column_status"] : null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo (isset($context["sort_status"]) ? $context["sort_status"] : null);
            echo "\">";
            echo (isset($context["column_status"]) ? $context["column_status"] : null);
            echo "</a> ";
        }
        echo "</td>
                    <td class=\"text-right\">";
        // line 117
        if (((isset($context["sort"]) ? $context["sort"] : null) == "o.total")) {
            echo " <a href=\"";
            echo (isset($context["sort_total"]) ? $context["sort_total"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_total"]) ? $context["column_total"] : null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo (isset($context["sort_total"]) ? $context["sort_total"] : null);
            echo "\">";
            echo (isset($context["column_total"]) ? $context["column_total"] : null);
            echo "</a> ";
        }
        echo "</td>
                    <td class=\"text-left\">";
        // line 118
        if (((isset($context["sort"]) ? $context["sort"] : null) == "o.date_added")) {
            echo " <a href=\"";
            echo (isset($context["sort_date_added"]) ? $context["sort_date_added"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_date_added"]) ? $context["column_date_added"] : null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo (isset($context["sort_date_added"]) ? $context["sort_date_added"] : null);
            echo "\">";
            echo (isset($context["column_date_added"]) ? $context["column_date_added"] : null);
            echo "</a> ";
        }
        echo "</td>
                    <td class=\"text-left\">";
        // line 119
        if (((isset($context["sort"]) ? $context["sort"] : null) == "o.date_modified")) {
            echo " <a href=\"";
            echo (isset($context["sort_date_modified"]) ? $context["sort_date_modified"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_date_modified"]) ? $context["column_date_modified"] : null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo (isset($context["sort_date_modified"]) ? $context["sort_date_modified"] : null);
            echo "\">";
            echo (isset($context["column_date_modified"]) ? $context["column_date_modified"] : null);
            echo "</a> ";
        }
        echo "</td>
<td class=\"text-left\">Shipping Method</td>
            <td class=\"text-left\">Shipped Status</td>
                    <td class=\"text-right\">";
        // line 122
        echo (isset($context["column_action"]) ? $context["column_action"] : null);
        echo "</td>
                  </tr>
                </thead>
                <tbody>
                
                ";
        // line 127
        if ((isset($context["orders"]) ? $context["orders"] : null)) {
            // line 128
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["orders"]) ? $context["orders"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 129
                echo "                <tr>
                  <td class=\"text-center\"> ";
                // line 130
                if (twig_in_filter($this->getAttribute($context["order"], "order_id", array()), (isset($context["selected"]) ? $context["selected"] : null))) {
                    // line 131
                    echo "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo $this->getAttribute($context["order"], "order_id", array());
                    echo "\" checked=\"checked\" />
                    ";
                } else {
                    // line 133
                    echo "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo $this->getAttribute($context["order"], "order_id", array());
                    echo "\" />
                    ";
                }
                // line 135
                echo "                    <input type=\"hidden\" name=\"shipping_code[]\" value=\"";
                echo $this->getAttribute($context["order"], "shipping_code", array());
                echo "\" /></td>
                  <td class=\"text-right\">";
                // line 136
                echo $this->getAttribute($context["order"], "order_id", array());
                echo "</td>
                  <td class=\"text-left\">";
                // line 137
                echo $this->getAttribute($context["order"], "customer", array());
                echo "</td>
                  <td class=\"text-left\">";
                // line 138
                echo $this->getAttribute($context["order"], "order_status", array());
                echo "</td>
                  <td class=\"text-right\">";
                // line 139
                echo $this->getAttribute($context["order"], "total", array());
                echo "</td>
                  <td class=\"text-left\">";
                // line 140
                echo $this->getAttribute($context["order"], "date_added", array());
                echo "</td>
                  <td class=\"text-left\">";
                // line 141
                echo $this->getAttribute($context["order"], "date_modified", array());
                echo "</td>

            <td class=\"text-left\">";
                // line 143
                echo $this->getAttribute($context["order"], "shipping_method", array());
                echo "</td>
            <td class=\"text-left\">";
                // line 144
                if ($this->getAttribute($context["order"], "ship_status", array())) {
                    echo " ";
                    echo $this->getAttribute($context["order"], "ship_status", array());
                    echo " ";
                }
                echo "</td>
                  <td class=\"text-right\"><div style=\"min-width: 120px;\">
                      <div class=\"btn-group\"> <a href=\"";
                // line 146
                echo $this->getAttribute($context["order"], "view", array());
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_view"]) ? $context["button_view"] : null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-eye\"></i></a>
                        <button type=\"button\" data-toggle=\"dropdown\" class=\"btn btn-primary dropdown-toggle\"><span class=\"caret\"></span></button>
                        <ul class=\"dropdown-menu dropdown-menu-right\">
                          <li><a href=\"";
                // line 149
                echo $this->getAttribute($context["order"], "edit", array());
                echo "\"><i class=\"fa fa-pencil\"></i> ";
                echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
                echo "</a></li>
                          <li><a href=\"";
                // line 150
                echo $this->getAttribute($context["order"], "order_id", array());
                echo "\"><i class=\"fa fa-trash-o\"></i> ";
                echo (isset($context["button_delete"]) ? $context["button_delete"] : null);
                echo "</a></li>
                        </ul>
                      </div>
                    </div></td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 156
            echo "                ";
        } else {
            // line 157
            echo "                <tr>
                  <td class=\"text-center\" colspan=\"8\">";
            // line 158
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo "</td>
                </tr>
                ";
        }
        // line 161
        echo "                  </tbody>
                
              </table>
            </div>
          </form>
          <div class=\"row\">
            <div class=\"col-sm-6 text-left\">";
        // line 167
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "</div>
            <div class=\"col-sm-6 text-right\">";
        // line 168
        echo (isset($context["results"]) ? $context["results"] : null);
        echo "</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
\$('#button-filter').on('click', function() {
\turl = '';

\tvar filter_order_id = \$('input[name=\\'filter_order_id\\']').val();

\tif (filter_order_id) {
\t\turl += '&filter_order_id=' + encodeURIComponent(filter_order_id);
\t}

\tvar filter_customer = \$('input[name=\\'filter_customer\\']').val();

\tif (filter_customer) {
\t\turl += '&filter_customer=' + encodeURIComponent(filter_customer);
\t}

\tvar filter_order_status_id = \$('select[name=\\'filter_order_status_id\\']').val();

\tif (filter_order_status_id !== '') {
\t\turl += '&filter_order_status_id=' + encodeURIComponent(filter_order_status_id);
\t}

\tvar filter_total = \$('input[name=\\'filter_total\\']').val();

\tif (filter_total) {
\t\turl += '&filter_total=' + encodeURIComponent(filter_total);
\t}

\tvar filter_date_added = \$('input[name=\\'filter_date_added\\']').val();

\tif (filter_date_added) {
\t\turl += '&filter_date_added=' + encodeURIComponent(filter_date_added);
\t}

\tvar filter_date_modified = \$('input[name=\\'filter_date_modified\\']').val();

\tif (filter_date_modified) {
\t\turl += '&filter_date_modified=' + encodeURIComponent(filter_date_modified);
\t}

\tlocation = 'index.php?route=sale/order&user_token=";
        // line 214
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "' + url;
});
//--></script> 
  <script type=\"text/javascript\"><!--
\$('input[name=\\'filter_customer\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=customer/customer/autocomplete&user_token=";
        // line 221
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
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
\t\t\$('input[name=\\'filter_customer\\']').val(item['label']);
\t}
});
//--></script> 
  <script type=\"text/javascript\"><!--
\$('input[name^=\\'selected\\']').on('change', function() {
\t\$('#button-shipping, #button-invoice, #mp_export').prop('disabled', true); // Modified CIS

\tvar selected = \$('input[name^=\\'selected\\']:checked');

\tif (selected.length) {
\t\t\$('#button-invoice').prop('disabled', false);
    \$('#mp_export').prop('disabled', false); //CIS
\t}

\tfor (i = 0; i < selected.length; i++) {
\t\tif (\$(selected[i]).parent().find('input[name^=\\'shipping_code\\']').val()) {
\t\t\t\$('#button-shipping').prop('disabled', false);

\t\t\tbreak;
\t\t}
\t}
});


\$('#button-shipping, #button-invoice, #mp_export').prop('disabled', true); // Modified CIS


\$('input[name^=\\'selected\\']:first').trigger('change');

// IE and Edge fix!
\$('#button-shipping, #button-invoice, #mp_export').on('click', function(e) { // Modified CIS
\t\$('#form-order').attr('action', this.getAttribute('formAction'));
});

\$('#form-order li:last-child a').on('click', function(e) {
\te.preventDefault();
\t
\tvar element = this;
\t
\tif (confirm('";
        // line 274
        echo (isset($context["text_confirm"]) ? $context["text_confirm"] : null);
        echo "')) {
\t\t\$.ajax({
\t\t\turl: '";
        // line 276
        echo (isset($context["catalog"]) ? $context["catalog"] : null);
        echo "index.php?route=api/order/delete&api_token=";
        echo (isset($context["api_token"]) ? $context["api_token"] : null);
        echo "&store_id=";
        echo (isset($context["store_id"]) ? $context["store_id"] : null);
        echo "&order_id=' + \$(element).attr('href'),
\t\t\tdataType: 'json',
\t\t\tbeforeSend: function() {
\t\t\t\t\$(element).parent().parent().parent().find('button').button('loading');
\t\t\t},
\t\t\tcomplete: function() {
\t\t\t\t\$(element).parent().parent().parent().find('button').button('reset');
\t\t\t},
\t\t\tsuccess: function(json) {
\t\t\t\t\$('.alert-dismissible').remove();
\t
\t\t\t\tif (json['error']) {
\t\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t}
\t
\t\t\t\tif (json['success']) {
\t\t\t\t\tlocation = '";
        // line 292
        echo (isset($context["delete"]) ? $context["delete"] : null);
        echo "';
\t\t\t\t}
\t\t\t},
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t});
\t}
});
//--></script> 
  <script src=\"view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js\" type=\"text/javascript\"></script>
  <link href=\"view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
  <script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: '";
        // line 306
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\tpickTime: false
});
//--></script></div>
";
        // line 310
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "sale/order_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  681 => 310,  674 => 306,  657 => 292,  634 => 276,  629 => 274,  573 => 221,  563 => 214,  514 => 168,  510 => 167,  502 => 161,  496 => 158,  493 => 157,  490 => 156,  476 => 150,  470 => 149,  462 => 146,  453 => 144,  449 => 143,  444 => 141,  440 => 140,  436 => 139,  432 => 138,  428 => 137,  424 => 136,  419 => 135,  413 => 133,  407 => 131,  405 => 130,  402 => 129,  397 => 128,  395 => 127,  387 => 122,  367 => 119,  349 => 118,  331 => 117,  313 => 116,  295 => 115,  277 => 114,  265 => 105,  254 => 97,  243 => 91,  238 => 89,  227 => 83,  222 => 81,  214 => 78,  210 => 77,  204 => 73,  198 => 72,  190 => 69,  187 => 68,  179 => 65,  176 => 64,  173 => 63,  168 => 62,  162 => 59,  159 => 58,  153 => 55,  150 => 54,  148 => 53,  141 => 49,  133 => 46,  129 => 45,  121 => 42,  117 => 41,  110 => 37,  104 => 33,  96 => 29,  93 => 28,  85 => 24,  83 => 23,  78 => 20,  67 => 18,  63 => 17,  58 => 15,  51 => 11,  44 => 9,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/* <div class="page-header">*/
/*   <div class="container-fluid">*/
/*     <div class="pull-right">*/
/*       <button type="button" data-toggle="tooltip" title="{{ button_filter }}" onclick="$('#filter-order').toggleClass('hidden-sm hidden-xs');" class="btn btn-default hidden-md hidden-lg"><i class="fa fa-filter"></i></button>*/
/*       <button type="submit" id="button-shipping" form="form-order" formaction="{{ shipping }}" formtarget="_blank" data-toggle="tooltip" title="{{ button_shipping_print }}" class="btn btn-info"><i class="fa fa-truck"></i></button>*/
/*       <button type="submit" id="button-invoice" form="form-order" formaction="{{ invoice }}" formtarget="_blank" data-toggle="tooltip" title="{{ button_invoice_print }}" class="btn btn-info"><i class="fa fa-print"></i></button>*/
/*       <a href="{{ add }}" data-toggle="tooltip" title="{{ button_add }}" class="btn btn-primary"><i class="fa fa-plus"></i></a>*/
/*       <!-- CIS -->*/
/*        <button type="submit" id="mp_export" form="form-order" formaction="{{ export }}" data-toggle="tooltip" title="Export to Myparcel" class="btn btn-info"><i class="fa fa-download"></i></button>*/
/*  */
/*       <!-- CIS -->*/
/*        </div>*/
/*     <h1>{{ heading_title }}</h1>*/
/*     <ul class="breadcrumb">*/
/*       {% for breadcrumb in breadcrumbs %}*/
/*       <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*       {% endfor %}*/
/*     </ul>*/
/*   </div>*/
/* </div>*/
/* <div class="container-fluid">{% if error_warning %}*/
/*   <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*     <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*   </div>*/
/*   {% endif %}*/
/*   {% if success %}*/
/*   <div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> {{ success }}*/
/*     <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*   </div>*/
/*   {% endif %}*/
/*   <div class="row">*/
/*     <div id="filter-order" class="col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs">*/
/*       <div class="panel panel-default">*/
/*         <div class="panel-heading">*/
/*           <h3 class="panel-title"><i class="fa fa-filter"></i> {{ text_filter }}</h3>*/
/*         </div>*/
/*         <div class="panel-body">*/
/*           <div class="form-group">*/
/*             <label class="control-label" for="input-order-id">{{ entry_order_id }}</label>*/
/*             <input type="text" name="filter_order_id" value="{{ filter_order_id }}" placeholder="{{ entry_order_id }}" id="input-order-id" class="form-control" />*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="control-label" for="input-customer">{{ entry_customer }}</label>*/
/*             <input type="text" name="filter_customer" value="{{ filter_customer }}" placeholder="{{ entry_customer }}" id="input-customer" class="form-control" />*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="control-label" for="input-order-status">{{ entry_order_status }}</label>*/
/*             <select name="filter_order_status_id" id="input-order-status" class="form-control">*/
/*               <option value=""></option>*/
/*               */
/*               {% if filter_order_status_id == '0' %}*/
/*               */
/*               <option value="0" selected="selected">{{ text_missing }}</option>*/
/*               */
/*               {% else %}*/
/*               */
/*               <option value="0">{{ text_missing }}</option>*/
/*               */
/*               {% endif %}*/
/*               {% for order_status in order_statuses %}*/
/*               {% if order_status.order_status_id == filter_order_status_id %}*/
/*               */
/*               <option value="{{ order_status.order_status_id }}" selected="selected">{{ order_status.name }}</option>*/
/*               */
/*               {% else %}*/
/*               */
/*               <option value="{{ order_status.order_status_id }}">{{ order_status.name }}</option>*/
/*               */
/*               {% endif %}*/
/*               {% endfor %}*/
/*             */
/*             </select>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="control-label" for="input-total">{{ entry_total }}</label>*/
/*             <input type="text" name="filter_total" value="{{ filter_total }}" placeholder="{{ entry_total }}" id="input-total" class="form-control" />*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="control-label" for="input-date-added">{{ entry_date_added }}</label>*/
/*             <div class="input-group date">*/
/*               <input type="text" name="filter_date_added" value="{{ filter_date_added }}" placeholder="{{ entry_date_added }}" data-date-format="YYYY-MM-DD" id="input-date-added" class="form-control" />*/
/*               <span class="input-group-btn">*/
/*               <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*               </span> </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="control-label" for="input-date-modified">{{ entry_date_modified }}</label>*/
/*             <div class="input-group date">*/
/*               <input type="text" name="filter_date_modified" value="{{ filter_date_modified }}" placeholder="{{ entry_date_modified }}" data-date-format="YYYY-MM-DD" id="input-date-modified" class="form-control" />*/
/*               <span class="input-group-btn">*/
/*               <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*               </span> </div>*/
/*           </div>*/
/*           <div class="form-group text-right">*/
/*             <button type="button" id="button-filter" class="btn btn-default"><i class="fa fa-filter"></i> {{ button_filter }}</button>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*     <div class="col-md-9 col-md-pull-3 col-sm-12">*/
/*       <div class="panel panel-default">*/
/*         <div class="panel-heading">*/
/*           <h3 class="panel-title"><i class="fa fa-list"></i> {{ text_list }}</h3>*/
/*         </div>*/
/*         <div class="panel-body">*/
/*           <form method="post" action="" enctype="multipart/form-data" id="form-order">*/
/*             <div class="table-responsive">*/
/*               <table class="table table-bordered table-hover">*/
/*                 <thead>*/
/*                   <tr>*/
/*                     <td style="width: 1px;" class="text-center"><input type="checkbox" onclick="$('input[name*=\'selected\']').prop('checked', this.checked);" /></td>*/
/*                     <td class="text-right">{% if sort == 'o.order_id' %} <a href="{{ sort_order }}" class="{{ order|lower }}">{{ column_order_id }}</a> {% else %} <a href="{{ sort_order }}">{{ column_order_id }}</a> {% endif %}</td>*/
/*                     <td class="text-left">{% if sort == 'customer' %} <a href="{{ sort_customer }}" class="{{ order|lower }}">{{ column_customer }}</a> {% else %} <a href="{{ sort_customer }}">{{ column_customer }}</a> {% endif %}</td>*/
/*                     <td class="text-left">{% if sort == 'order_status' %} <a href="{{ sort_status }}" class="{{ order|lower }}">{{ column_status }}</a> {% else %} <a href="{{ sort_status }}">{{ column_status }}</a> {% endif %}</td>*/
/*                     <td class="text-right">{% if sort == 'o.total' %} <a href="{{ sort_total }}" class="{{ order|lower }}">{{ column_total }}</a> {% else %} <a href="{{ sort_total }}">{{ column_total }}</a> {% endif %}</td>*/
/*                     <td class="text-left">{% if sort == 'o.date_added' %} <a href="{{ sort_date_added }}" class="{{ order|lower }}">{{ column_date_added }}</a> {% else %} <a href="{{ sort_date_added }}">{{ column_date_added }}</a> {% endif %}</td>*/
/*                     <td class="text-left">{% if sort == 'o.date_modified' %} <a href="{{ sort_date_modified }}" class="{{ order|lower }}">{{ column_date_modified }}</a> {% else %} <a href="{{ sort_date_modified }}">{{ column_date_modified }}</a> {% endif %}</td>*/
/* <td class="text-left">Shipping Method</td>*/
/*             <td class="text-left">Shipped Status</td>*/
/*                     <td class="text-right">{{ column_action }}</td>*/
/*                   </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                 */
/*                 {% if orders %}*/
/*                 {% for order in orders %}*/
/*                 <tr>*/
/*                   <td class="text-center"> {% if order.order_id in selected %}*/
/*                     <input type="checkbox" name="selected[]" value="{{ order.order_id }}" checked="checked" />*/
/*                     {% else %}*/
/*                     <input type="checkbox" name="selected[]" value="{{ order.order_id }}" />*/
/*                     {% endif %}*/
/*                     <input type="hidden" name="shipping_code[]" value="{{ order.shipping_code }}" /></td>*/
/*                   <td class="text-right">{{ order.order_id }}</td>*/
/*                   <td class="text-left">{{ order.customer }}</td>*/
/*                   <td class="text-left">{{ order.order_status }}</td>*/
/*                   <td class="text-right">{{ order.total }}</td>*/
/*                   <td class="text-left">{{ order.date_added }}</td>*/
/*                   <td class="text-left">{{ order.date_modified }}</td>*/
/* */
/*             <td class="text-left">{{ order.shipping_method }}</td>*/
/*             <td class="text-left">{% if order.ship_status %} {{ order.ship_status }} {% endif %}</td>*/
/*                   <td class="text-right"><div style="min-width: 120px;">*/
/*                       <div class="btn-group"> <a href="{{ order.view }}" data-toggle="tooltip" title="{{ button_view }}" class="btn btn-primary"><i class="fa fa-eye"></i></a>*/
/*                         <button type="button" data-toggle="dropdown" class="btn btn-primary dropdown-toggle"><span class="caret"></span></button>*/
/*                         <ul class="dropdown-menu dropdown-menu-right">*/
/*                           <li><a href="{{ order.edit }}"><i class="fa fa-pencil"></i> {{ button_edit }}</a></li>*/
/*                           <li><a href="{{ order.order_id }}"><i class="fa fa-trash-o"></i> {{ button_delete }}</a></li>*/
/*                         </ul>*/
/*                       </div>*/
/*                     </div></td>*/
/*                 </tr>*/
/*                 {% endfor %}*/
/*                 {% else %}*/
/*                 <tr>*/
/*                   <td class="text-center" colspan="8">{{ text_no_results }}</td>*/
/*                 </tr>*/
/*                 {% endif %}*/
/*                   </tbody>*/
/*                 */
/*               </table>*/
/*             </div>*/
/*           </form>*/
/*           <div class="row">*/
/*             <div class="col-sm-6 text-left">{{ pagination }}</div>*/
/*             <div class="col-sm-6 text-right">{{ results }}</div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   <script type="text/javascript"><!--*/
/* $('#button-filter').on('click', function() {*/
/* 	url = '';*/
/* */
/* 	var filter_order_id = $('input[name=\'filter_order_id\']').val();*/
/* */
/* 	if (filter_order_id) {*/
/* 		url += '&filter_order_id=' + encodeURIComponent(filter_order_id);*/
/* 	}*/
/* */
/* 	var filter_customer = $('input[name=\'filter_customer\']').val();*/
/* */
/* 	if (filter_customer) {*/
/* 		url += '&filter_customer=' + encodeURIComponent(filter_customer);*/
/* 	}*/
/* */
/* 	var filter_order_status_id = $('select[name=\'filter_order_status_id\']').val();*/
/* */
/* 	if (filter_order_status_id !== '') {*/
/* 		url += '&filter_order_status_id=' + encodeURIComponent(filter_order_status_id);*/
/* 	}*/
/* */
/* 	var filter_total = $('input[name=\'filter_total\']').val();*/
/* */
/* 	if (filter_total) {*/
/* 		url += '&filter_total=' + encodeURIComponent(filter_total);*/
/* 	}*/
/* */
/* 	var filter_date_added = $('input[name=\'filter_date_added\']').val();*/
/* */
/* 	if (filter_date_added) {*/
/* 		url += '&filter_date_added=' + encodeURIComponent(filter_date_added);*/
/* 	}*/
/* */
/* 	var filter_date_modified = $('input[name=\'filter_date_modified\']').val();*/
/* */
/* 	if (filter_date_modified) {*/
/* 		url += '&filter_date_modified=' + encodeURIComponent(filter_date_modified);*/
/* 	}*/
/* */
/* 	location = 'index.php?route=sale/order&user_token={{ user_token }}' + url;*/
/* });*/
/* //--></script> */
/*   <script type="text/javascript"><!--*/
/* $('input[name=\'filter_customer\']').autocomplete({*/
/* 	'source': function(request, response) {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=customer/customer/autocomplete&user_token={{ user_token }}&filter_name=' +  encodeURIComponent(request),*/
/* 			dataType: 'json',*/
/* 			success: function(json) {*/
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
/* 		$('input[name=\'filter_customer\']').val(item['label']);*/
/* 	}*/
/* });*/
/* //--></script> */
/*   <script type="text/javascript"><!--*/
/* $('input[name^=\'selected\']').on('change', function() {*/
/* 	$('#button-shipping, #button-invoice, #mp_export').prop('disabled', true); // Modified CIS*/
/* */
/* 	var selected = $('input[name^=\'selected\']:checked');*/
/* */
/* 	if (selected.length) {*/
/* 		$('#button-invoice').prop('disabled', false);*/
/*     $('#mp_export').prop('disabled', false); //CIS*/
/* 	}*/
/* */
/* 	for (i = 0; i < selected.length; i++) {*/
/* 		if ($(selected[i]).parent().find('input[name^=\'shipping_code\']').val()) {*/
/* 			$('#button-shipping').prop('disabled', false);*/
/* */
/* 			break;*/
/* 		}*/
/* 	}*/
/* });*/
/* */
/* */
/* $('#button-shipping, #button-invoice, #mp_export').prop('disabled', true); // Modified CIS*/
/* */
/* */
/* $('input[name^=\'selected\']:first').trigger('change');*/
/* */
/* // IE and Edge fix!*/
/* $('#button-shipping, #button-invoice, #mp_export').on('click', function(e) { // Modified CIS*/
/* 	$('#form-order').attr('action', this.getAttribute('formAction'));*/
/* });*/
/* */
/* $('#form-order li:last-child a').on('click', function(e) {*/
/* 	e.preventDefault();*/
/* 	*/
/* 	var element = this;*/
/* 	*/
/* 	if (confirm('{{ text_confirm }}')) {*/
/* 		$.ajax({*/
/* 			url: '{{ catalog }}index.php?route=api/order/delete&api_token={{ api_token }}&store_id={{ store_id }}&order_id=' + $(element).attr('href'),*/
/* 			dataType: 'json',*/
/* 			beforeSend: function() {*/
/* 				$(element).parent().parent().parent().find('button').button('loading');*/
/* 			},*/
/* 			complete: function() {*/
/* 				$(element).parent().parent().parent().find('button').button('reset');*/
/* 			},*/
/* 			success: function(json) {*/
/* 				$('.alert-dismissible').remove();*/
/* 	*/
/* 				if (json['error']) {*/
/* 					$('#content > .container-fluid').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* 				}*/
/* 	*/
/* 				if (json['success']) {*/
/* 					location = '{{ delete }}';*/
/* 				}*/
/* 			},*/
/* 			error: function(xhr, ajaxOptions, thrownError) {*/
/* 				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 			}*/
/* 		});*/
/* 	}*/
/* });*/
/* //--></script> */
/*   <script src="view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js" type="text/javascript"></script>*/
/*   <link href="view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css" type="text/css" rel="stylesheet" media="screen" />*/
/*   <script type="text/javascript"><!--*/
/* $('.date').datetimepicker({*/
/* 	language: '{{ datepicker }}',*/
/* 	pickTime: false*/
/* });*/
/* //--></script></div>*/
/* {{ footer }} */
/* */
