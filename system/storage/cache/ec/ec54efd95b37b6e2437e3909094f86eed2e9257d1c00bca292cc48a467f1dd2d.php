<?php

/* extension/shipping/my_parcel.twig */
class __TwigTemplate_1ede2811acbddab87450a0125b4c34c934e11e7b7eb4ccb63ccd1d51dc0534f3 extends Twig_Template
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
        <button type=\"submit\" form=\"form-shipping\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
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
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 17
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 18
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 22
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 24
        echo (isset($context["text_edit"]) ? $context["text_edit"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 27
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-shipping\" class=\"form-horizontal\">
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-cost\">";
        // line 29
        echo (isset($context["entry_cost"]) ? $context["entry_cost"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"shipping_my_parcel_cost\" value=\"";
        // line 31
        echo (isset($context["shipping_my_parcel_cost"]) ? $context["shipping_my_parcel_cost"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_cost"]) ? $context["entry_cost"] : null);
        echo "\" id=\"input-cost\" class=\"form-control\" />
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-tax-class\">";
        // line 35
        echo (isset($context["entry_tax_class"]) ? $context["entry_tax_class"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"shipping_my_parcel_tax_class_id\" id=\"input-tax-class\" class=\"form-control\">
                <option value=\"0\">";
        // line 38
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>
                ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tax_classes"]) ? $context["tax_classes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["tax_class"]) {
            // line 40
            echo "                ";
            if (($this->getAttribute($context["tax_class"], "tax_class_id", array()) == (isset($context["shipping_my_parcel_tax_class_id"]) ? $context["shipping_my_parcel_tax_class_id"] : null))) {
                // line 41
                echo "                <option value=\"";
                echo $this->getAttribute($context["tax_class"], "tax_class_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["tax_class"], "title", array());
                echo "</option>
                ";
            } else {
                // line 43
                echo "                <option value=\"";
                echo $this->getAttribute($context["tax_class"], "tax_class_id", array());
                echo "\">";
                echo $this->getAttribute($context["tax_class"], "title", array());
                echo "</option>
                ";
            }
            // line 45
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tax_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-geo-zone\">";
        // line 50
        echo (isset($context["entry_geo_zone"]) ? $context["entry_geo_zone"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"shipping_my_parcel_geo_zone_id\" id=\"input-geo-zone\" class=\"form-control\">
                <option value=\"0\">";
        // line 53
        echo (isset($context["text_all_zones"]) ? $context["text_all_zones"] : null);
        echo "</option>
                ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["geo_zones"]) ? $context["geo_zones"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["geo_zone"]) {
            // line 55
            echo "                ";
            if (($this->getAttribute($context["geo_zone"], "geo_zone_id", array()) == (isset($context["shipping_my_parcel_geo_zone_id"]) ? $context["shipping_my_parcel_geo_zone_id"] : null))) {
                // line 56
                echo "                <option value=\"";
                echo $this->getAttribute($context["geo_zone"], "geo_zone_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["geo_zone"], "name", array());
                echo "</option>
                ";
            } else {
                // line 58
                echo "                <option value=\"";
                echo $this->getAttribute($context["geo_zone"], "geo_zone_id", array());
                echo "\">";
                echo $this->getAttribute($context["geo_zone"], "name", array());
                echo "</option>
                ";
            }
            // line 60
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['geo_zone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 65
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"shipping_my_parcel_status\" id=\"input-status\" class=\"form-control\">
                ";
        // line 68
        if ((isset($context["shipping_my_parcel_status"]) ? $context["shipping_my_parcel_status"] : null)) {
            // line 69
            echo "                <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                <option value=\"0\">";
            // line 70
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                ";
        } else {
            // line 72
            echo "                <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 73
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                ";
        }
        // line 75
        echo "              </select>
            </div>
          </div>

          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-api-url\">";
        // line 80
        echo (isset($context["entry_api_url"]) ? $context["entry_api_url"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"shipping_my_parcel_api_url\" value=\"";
        // line 82
        echo (isset($context["shipping_my_parcel_api_url"]) ? $context["shipping_my_parcel_api_url"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_api_url"]) ? $context["entry_api_url"] : null);
        echo "\" id=\"input-api-url\" class=\"form-control\" />
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-api-auth-url\">";
        // line 86
        echo (isset($context["entry_api_auth_url"]) ? $context["entry_api_auth_url"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"shipping_my_parcel_api_auth_url\" value=\"";
        // line 88
        echo (isset($context["shipping_my_parcel_api_auth_url"]) ? $context["shipping_my_parcel_api_auth_url"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_api_auth_url"]) ? $context["entry_api_auth_url"] : null);
        echo "\" id=\"input-api-auth-url\" class=\"form-control\" />
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-api-client-key\">";
        // line 92
        echo (isset($context["entry_api_client_key"]) ? $context["entry_api_client_key"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"shipping_my_parcel_api_client_key\" value=\"";
        // line 94
        echo (isset($context["shipping_my_parcel_api_client_key"]) ? $context["shipping_my_parcel_api_client_key"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_api_client_key"]) ? $context["entry_api_client_key"] : null);
        echo "\" id=\"input-api-client-key\" class=\"form-control\" />
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-api-secret-key\">";
        // line 98
        echo (isset($context["entry_api_secret_key"]) ? $context["entry_api_secret_key"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"shipping_my_parcel_api_secret_key\" value=\"";
        // line 100
        echo (isset($context["shipping_my_parcel_api_secret_key"]) ? $context["shipping_my_parcel_api_secret_key"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_api_secret_key"]) ? $context["entry_api_secret_key"] : null);
        echo "\" id=\"input-api-secret-key\" class=\"form-control\" />
            </div>
          </div>

          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-shipment\">";
        // line 105
        echo (isset($context["entry_api_shipment"]) ? $context["entry_api_shipment"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
            <select name=\"shipping_my_parcel_shipment\" id=\"input-shipment\" class=\"form-control\">
                ";
        // line 108
        if ((isset($context["shipping_my_parcel_shipment"]) ? $context["shipping_my_parcel_shipment"] : null)) {
            // line 109
            echo "                <option value=\"1\" selected=\"selected\">Yes</option>
                <option value=\"0\">No</option>
                ";
        } else {
            // line 112
            echo "                <option value=\"1\">Yes</option>
                <option value=\"0\" selected=\"selected\">No</option>
                ";
        }
        // line 115
        echo "              </select>             
            </div>
          </div>

          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-sort-order\">";
        // line 120
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"shipping_my_parcel_sort_order\" value=\"";
        // line 122
        echo (isset($context["shipping_my_parcel_sort_order"]) ? $context["shipping_my_parcel_sort_order"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "\" id=\"input-sort-order\" class=\"form-control\" />
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 130
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "extension/shipping/my_parcel.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  328 => 130,  315 => 122,  310 => 120,  303 => 115,  298 => 112,  293 => 109,  291 => 108,  285 => 105,  275 => 100,  270 => 98,  261 => 94,  256 => 92,  247 => 88,  242 => 86,  233 => 82,  228 => 80,  221 => 75,  216 => 73,  211 => 72,  206 => 70,  201 => 69,  199 => 68,  193 => 65,  187 => 61,  181 => 60,  173 => 58,  165 => 56,  162 => 55,  158 => 54,  154 => 53,  148 => 50,  142 => 46,  136 => 45,  128 => 43,  120 => 41,  117 => 40,  113 => 39,  109 => 38,  103 => 35,  94 => 31,  89 => 29,  84 => 27,  78 => 24,  74 => 22,  66 => 18,  64 => 17,  58 => 13,  47 => 11,  43 => 10,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="submit" form="form-shipping" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/*         <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i></a></div>*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid">*/
/*     {% if error_warning %}*/
/*     <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_edit }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-shipping" class="form-horizontal">*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-cost">{{ entry_cost }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="shipping_my_parcel_cost" value="{{ shipping_my_parcel_cost }}" placeholder="{{ entry_cost }}" id="input-cost" class="form-control" />*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-tax-class">{{ entry_tax_class }}</label>*/
/*             <div class="col-sm-10">*/
/*               <select name="shipping_my_parcel_tax_class_id" id="input-tax-class" class="form-control">*/
/*                 <option value="0">{{ text_none }}</option>*/
/*                 {% for tax_class in tax_classes %}*/
/*                 {% if tax_class.tax_class_id == shipping_my_parcel_tax_class_id %}*/
/*                 <option value="{{ tax_class.tax_class_id }}" selected="selected">{{ tax_class.title }}</option>*/
/*                 {% else %}*/
/*                 <option value="{{ tax_class.tax_class_id }}">{{ tax_class.title }}</option>*/
/*                 {% endif %}*/
/*                 {% endfor %}*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-geo-zone">{{ entry_geo_zone }}</label>*/
/*             <div class="col-sm-10">*/
/*               <select name="shipping_my_parcel_geo_zone_id" id="input-geo-zone" class="form-control">*/
/*                 <option value="0">{{ text_all_zones }}</option>*/
/*                 {% for geo_zone in geo_zones %}*/
/*                 {% if geo_zone.geo_zone_id == shipping_my_parcel_geo_zone_id %}*/
/*                 <option value="{{ geo_zone.geo_zone_id }}" selected="selected">{{ geo_zone.name }}</option>*/
/*                 {% else %}*/
/*                 <option value="{{ geo_zone.geo_zone_id }}">{{ geo_zone.name }}</option>*/
/*                 {% endif %}*/
/*                 {% endfor %}*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-status">{{ entry_status }}</label>*/
/*             <div class="col-sm-10">*/
/*               <select name="shipping_my_parcel_status" id="input-status" class="form-control">*/
/*                 {% if shipping_my_parcel_status %}*/
/*                 <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                 <option value="0">{{ text_disabled }}</option>*/
/*                 {% else %}*/
/*                 <option value="1">{{ text_enabled }}</option>*/
/*                 <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                 {% endif %}*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/* */
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-api-url">{{ entry_api_url }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="shipping_my_parcel_api_url" value="{{ shipping_my_parcel_api_url }}" placeholder="{{ entry_api_url }}" id="input-api-url" class="form-control" />*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-api-auth-url">{{ entry_api_auth_url }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="shipping_my_parcel_api_auth_url" value="{{ shipping_my_parcel_api_auth_url }}" placeholder="{{ entry_api_auth_url }}" id="input-api-auth-url" class="form-control" />*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-api-client-key">{{ entry_api_client_key }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="shipping_my_parcel_api_client_key" value="{{ shipping_my_parcel_api_client_key }}" placeholder="{{ entry_api_client_key }}" id="input-api-client-key" class="form-control" />*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-api-secret-key">{{ entry_api_secret_key }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="shipping_my_parcel_api_secret_key" value="{{ shipping_my_parcel_api_secret_key }}" placeholder="{{ entry_api_secret_key }}" id="input-api-secret-key" class="form-control" />*/
/*             </div>*/
/*           </div>*/
/* */
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-shipment">{{ entry_api_shipment }}</label>*/
/*             <div class="col-sm-10">*/
/*             <select name="shipping_my_parcel_shipment" id="input-shipment" class="form-control">*/
/*                 {% if shipping_my_parcel_shipment %}*/
/*                 <option value="1" selected="selected">Yes</option>*/
/*                 <option value="0">No</option>*/
/*                 {% else %}*/
/*                 <option value="1">Yes</option>*/
/*                 <option value="0" selected="selected">No</option>*/
/*                 {% endif %}*/
/*               </select>             */
/*             </div>*/
/*           </div>*/
/* */
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-sort-order">{{ entry_sort_order }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="shipping_my_parcel_sort_order" value="{{ shipping_my_parcel_sort_order }}" placeholder="{{ entry_sort_order }}" id="input-sort-order" class="form-control" />*/
/*             </div>*/
/*           </div>*/
/*         </form>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* {{ footer }} */
