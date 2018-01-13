<?php

/* forms/default/field.html.twig */
class __TwigTemplate_b1f72e206fb92b9abd509e8f49deaa5bb34d0abae1c00e1d3fe63822971f3d65 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'outer_field_classes' => array($this, 'block_outer_field_classes'),
            'contents' => array($this, 'block_contents'),
            'label' => array($this, 'block_label'),
            'global_attributes' => array($this, 'block_global_attributes'),
            'group' => array($this, 'block_group'),
            'input' => array($this, 'block_input'),
            'prepend' => array($this, 'block_prepend'),
            'input_attributes' => array($this, 'block_input_attributes'),
            'append' => array($this, 'block_append'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["originalValue"] = ((array_key_exists("originalValue", $context)) ? (($context["originalValue"] ?? null)) : (($context["value"] ?? null)));
        // line 2
        $context["toggleableChecked"] = ($this->getAttribute(($context["field"] ?? null), "toggleable", array()) && ( !(null === ($context["originalValue"] ?? null)) &&  !twig_test_empty(($context["originalValue"] ?? null))));
        // line 3
        $context["isDisabledToggleable"] = ($this->getAttribute(($context["field"] ?? null), "toggleable", array()) &&  !($context["toggleableChecked"] ?? null));
        // line 4
        $context["value"] = (((is_object(($context["value"] ?? null)) || (null === ($context["value"] ?? null)))) ? ($this->getAttribute(($context["field"] ?? null), "default", array())) : (($context["value"] ?? null)));
        // line 5
        $context["cookie_name"] = ((("forms-" . $this->getAttribute(($context["form"] ?? null), "name", array())) . "-") . $this->getAttribute(($context["field"] ?? null), "name", array()));
        // line 6
        $context["value"] = (((is_object(($context["value"] ?? null)) || (null === ($context["value"] ?? null)))) ? ((((null === $this->env->getExtension('Grav\Common\Twig\TwigExtension')->getCookie(($context["cookie_name"] ?? null)))) ? ($this->getAttribute(($context["field"] ?? null), "default", array())) : ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->getCookie(($context["cookie_name"] ?? null))))) : (($context["value"] ?? null)));
        // line 7
        $context["errors"] = $this->getAttribute($this->getAttribute(($context["form"] ?? null), "messages", array()), $this->getAttribute(($context["field"] ?? null), "name", array()));
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('field', $context, $blocks);
    }

    public function block_field($context, array $blocks = array())
    {
        // line 10
        echo "    <div class=\"";
        echo twig_escape_filter($this->env, ((($context["form_field_outer_classes"] ?? null)) ? (($context["form_field_outer_classes"] ?? null)) : ("form-field")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "outerclasses", array()), "html", null, true);
        echo " ";
        if (($context["errors"] ?? null)) {
            echo " has-errors";
        }
        echo " ";
        $this->displayBlock('outer_field_classes', $context, $blocks);
        echo "\">
        ";
        // line 11
        $this->displayBlock('contents', $context, $blocks);
        // line 82
        echo "    </div>
";
    }

    // line 10
    public function block_outer_field_classes($context, array $blocks = array())
    {
    }

    // line 11
    public function block_contents($context, array $blocks = array())
    {
        // line 12
        echo "            ";
        if ( !($this->getAttribute(($context["field"] ?? null), "label", array()) === false)) {
            // line 13
            echo "                <div class=\"";
            echo twig_escape_filter($this->env, ((($context["form_field_outer_label_classes"] ?? null)) ? (($context["form_field_outer_label_classes"] ?? null)) : ("form-label")), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "labelclasses", array()), "html", null, true);
            echo "\">
                    <label class=\"";
            // line 14
            echo twig_escape_filter($this->env, ((($context["form_field_label_classes"] ?? null)) ? (($context["form_field_label_classes"] ?? null)) : ("inline")), "html", null, true);
            echo "\" ";
            if ($this->getAttribute(($context["field"] ?? null), "id", array(), "any", true, true)) {
                echo "for=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "id", array()));
                echo "\" ";
            }
            echo " >
                    ";
            // line 15
            $this->displayBlock('label', $context, $blocks);
            // line 23
            echo "                    </label>
                </div>
            ";
        }
        // line 26
        echo "            <div class=\"";
        echo twig_escape_filter($this->env, ((($context["form_field_outer_data_classes"] ?? null)) ? (($context["form_field_outer_data_classes"] ?? null)) : ("form-data")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "dataclasses", array()), "html", null, true);
        echo "\"
                ";
        // line 27
        $this->displayBlock('global_attributes', $context, $blocks);
        // line 32
        echo "            >
                ";
        // line 33
        $this->displayBlock('group', $context, $blocks);
        // line 74
        echo "                ";
        if ($this->getAttribute(($context["field"] ?? null), "description", array())) {
            // line 75
            echo "                    <div class=\"form-extra-wrapper ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "size", array()));
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "wrapper_classes", array()), "html", null, true);
            echo "\">
                        <span class=\"form-description\">";
            // line 76
            echo $this->getAttribute(($context["field"] ?? null), "description", array());
            echo "</span>
                    </div>
                ";
        }
        // line 79
        echo "
            </div>
        ";
    }

    // line 15
    public function block_label($context, array $blocks = array())
    {
        // line 16
        echo "                        ";
        if ($this->getAttribute(($context["field"] ?? null), "help", array())) {
            // line 17
            echo "                        <span class=\"tooltip\" data-asTooltip-position=\"w\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->getAttribute(($context["field"] ?? null), "help", array())));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate((($this->getAttribute(($context["field"] ?? null), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "label", array()), twig_capitalize_string_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", array())))) : (twig_capitalize_string_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", array()))))), "html", null, true);
            echo "</span>
                        ";
        } else {
            // line 19
            echo "                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate((($this->getAttribute(($context["field"] ?? null), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "label", array()), twig_capitalize_string_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", array())))) : (twig_capitalize_string_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", array()))))), "html", null, true);
            echo "
                        ";
        }
        // line 21
        echo "                        ";
        echo ((twig_in_filter($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", array()), "required", array()), array(0 => "on", 1 => "true", 2 => 1))) ? ("<span class=\"required\">*</span>") : (""));
        echo "
                    ";
    }

    // line 27
    public function block_global_attributes($context, array $blocks = array())
    {
        // line 28
        echo "                data-grav-field=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "type", array()), "html", null, true);
        echo "\"
                data-grav-disabled=\"";
        // line 29
        echo (((null === ($context["originalValue"] ?? null))) ? ("true") : ("false"));
        echo "\"
                data-grav-default=\"";
        // line 30
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute(($context["field"] ?? null), "default", array())), "html_attr");
        echo "\"
                ";
    }

    // line 33
    public function block_group($context, array $blocks = array())
    {
        // line 34
        echo "                    ";
        $this->displayBlock('input', $context, $blocks);
        // line 73
        echo "                ";
    }

    // line 34
    public function block_input($context, array $blocks = array())
    {
        // line 35
        echo "                        <div class=\"";
        echo twig_escape_filter($this->env, ((($context["form_field_wrapper_classes"] ?? null)) ? (($context["form_field_wrapper_classes"] ?? null)) : ("form-input-wrapper")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "size", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "wrapper_classes", array()), "html", null, true);
        echo "\">
                            ";
        // line 36
        $this->displayBlock('prepend', $context, $blocks);
        // line 37
        echo "                            <input
                                ";
        // line 39
        echo "                                name=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", array()))), "html", null, true);
        echo "\"
                                value=\"";
        // line 40
        echo twig_escape_filter($this->env, twig_join_filter(($context["value"] ?? null), ", "), "html_attr");
        echo "\"
                                ";
        // line 42
        echo "                                ";
        $this->displayBlock('input_attributes', $context, $blocks);
        // line 62
        echo "                            />
                            ";
        // line 63
        $this->displayBlock('append', $context, $blocks);
        // line 64
        echo "                            ";
        if (($this->getAttribute(($context["form"] ?? null), "inline_errors", array()) && ($context["errors"] ?? null))) {
            // line 65
            echo "                                <div class=\"";
            echo twig_escape_filter($this->env, ((($context["form_errors_classes"] ?? null)) ? (($context["form_errors_classes"] ?? null)) : ("form-errors")), "html", null, true);
            echo "\">
                                    ";
            // line 66
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 67
                echo "                                        <p class=\"form-message\"><i class=\"fa fa-exclamation-circle\"></i> ";
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</p>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "                                </div>
                            ";
        }
        // line 71
        echo "                        </div>
                    ";
    }

    // line 36
    public function block_prepend($context, array $blocks = array())
    {
    }

    // line 42
    public function block_input_attributes($context, array $blocks = array())
    {
        // line 43
        echo "                                    ";
        if ($this->getAttribute(($context["field"] ?? null), "classes", array(), "any", true, true)) {
            echo "class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "classes", array()), "html", null, true);
            echo "\" ";
        }
        // line 44
        echo "                                    ";
        if ($this->getAttribute(($context["field"] ?? null), "id", array(), "any", true, true)) {
            echo "id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "id", array()));
            echo "\" ";
        }
        // line 45
        echo "                                    ";
        if ($this->getAttribute(($context["field"] ?? null), "style", array(), "any", true, true)) {
            echo "style=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "style", array()));
            echo "\" ";
        }
        // line 46
        echo "                                    ";
        if (($this->getAttribute(($context["field"] ?? null), "disabled", array()) || ($context["isDisabledToggleable"] ?? null))) {
            echo "disabled=\"disabled\"";
        }
        // line 47
        echo "                                    ";
        if ($this->getAttribute(($context["field"] ?? null), "placeholder", array())) {
            echo "placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->getAttribute(($context["field"] ?? null), "placeholder", array())), "html", null, true);
            echo "\"";
        }
        // line 48
        echo "                                    ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "autofocus", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "autofocus=\"autofocus\"";
        }
        // line 49
        echo "                                    ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "novalidate", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "novalidate=\"novalidate\"";
        }
        // line 50
        echo "                                    ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "readonly", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "readonly=\"readonly\"";
        }
        // line 51
        echo "                                    ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "autocomplete", array()), array(0 => "on", 1 => "off"))) {
            echo "autocomplete=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "autocomplete", array()), "html", null, true);
            echo "\"";
        }
        // line 52
        echo "                                    ";
        if ($this->getAttribute(($context["field"] ?? null), "attributes", array(), "any", true, true)) {
            // line 53
            echo "                                      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["field"] ?? null), "attributes", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                // line 54
                echo "                                          ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["attribute"], "name", array()), "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["attribute"], "value", array()));
                echo "\"
                                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "                                    ";
        }
        // line 57
        echo "                                    ";
        if (twig_in_filter($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", array()), "required", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "required=\"required\"";
        }
        // line 58
        echo "                                    ";
        if ($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", array()), "pattern", array())) {
            echo "pattern=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", array()), "pattern", array()));
            echo "\"";
        }
        // line 59
        echo "                                    ";
        if ($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", array()), "message", array())) {
            echo "title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", array()), "message", array())));
            echo "\"
                                    ";
        } elseif ($this->getAttribute(        // line 60
($context["field"] ?? null), "title", array(), "any", true, true)) {
            echo "title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->getAttribute(($context["field"] ?? null), "title", array())));
            echo "\" ";
        }
        // line 61
        echo "                                ";
    }

    // line 63
    public function block_append($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "forms/default/field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  376 => 63,  372 => 61,  366 => 60,  359 => 59,  352 => 58,  347 => 57,  344 => 56,  333 => 54,  328 => 53,  325 => 52,  318 => 51,  313 => 50,  308 => 49,  303 => 48,  296 => 47,  291 => 46,  284 => 45,  277 => 44,  270 => 43,  267 => 42,  262 => 36,  257 => 71,  253 => 69,  244 => 67,  240 => 66,  235 => 65,  232 => 64,  230 => 63,  227 => 62,  224 => 42,  220 => 40,  215 => 39,  212 => 37,  210 => 36,  201 => 35,  198 => 34,  194 => 73,  191 => 34,  188 => 33,  182 => 30,  178 => 29,  173 => 28,  170 => 27,  163 => 21,  157 => 19,  149 => 17,  146 => 16,  143 => 15,  137 => 79,  131 => 76,  124 => 75,  121 => 74,  119 => 33,  116 => 32,  114 => 27,  107 => 26,  102 => 23,  100 => 15,  90 => 14,  83 => 13,  80 => 12,  77 => 11,  72 => 10,  67 => 82,  65 => 11,  52 => 10,  46 => 9,  43 => 8,  41 => 7,  39 => 6,  37 => 5,  35 => 4,  33 => 3,  31 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set originalValue = originalValue is defined ? originalValue : value %}
{% set toggleableChecked = field.toggleable and (originalValue is not null and originalValue is not empty) %}
{% set isDisabledToggleable = field.toggleable and not toggleableChecked %}
{% set value = (is_object(value) or value is null ? field.default : value) %}
{% set cookie_name = 'forms-' ~ form.name ~ '-' ~ field.name %}
{% set value = (is_object(value) or value is null ? (get_cookie(cookie_name) is null ? field.default : get_cookie(cookie_name)) : value) %}
{% set errors = attribute(form.messages, field.name) %}

{% block field %}
    <div class=\"{{ form_field_outer_classes ?: 'form-field' }} {{ field.outerclasses }} {% if errors %} has-errors{% endif %} {% block outer_field_classes %}{% endblock %}\">
        {% block contents %}
            {% if field.label is not same as(false) %}
                <div class=\"{{ form_field_outer_label_classes ?: 'form-label' }} {{ field.labelclasses }}\">
                    <label class=\"{{ form_field_label_classes ?: 'inline' }}\" {% if field.id is defined %}for=\"{{ field.id|e }}\" {% endif %} >
                    {% block label %}
                        {% if field.help %}
                        <span class=\"tooltip\" data-asTooltip-position=\"w\" title=\"{{ field.help|t|e }}\">{{ field.label|default(field.name|capitalize)|t }}</span>
                        {% else %}
                        {{ field.label|default(field.name|capitalize)|t }}
                        {% endif %}
                        {{ field.validate.required in ['on', 'true', 1] ? '<span class=\"required\">*</span>' }}
                    {% endblock %}
                    </label>
                </div>
            {% endif %}
            <div class=\"{{ form_field_outer_data_classes ?: 'form-data' }} {{ field.dataclasses }}\"
                {% block global_attributes %}
                data-grav-field=\"{{ field.type }}\"
                data-grav-disabled=\"{{ originalValue is null ? 'true' : 'false' }}\"
                data-grav-default=\"{{ field.default|json_encode()|e('html_attr') }}\"
                {% endblock %}
            >
                {% block group %}
                    {% block input %}
                        <div class=\"{{ form_field_wrapper_classes ?: 'form-input-wrapper' }} {{ field.size }} {{ field.wrapper_classes }}\">
                            {% block prepend %}{% endblock prepend %}
                            <input
                                {# required attribute structures #}
                                name=\"{{ (scope ~ field.name)|fieldName }}\"
                                value=\"{{ value|join(', ')|e('html_attr') }}\"
                                {# input attribute structures #}
                                {% block input_attributes %}
                                    {% if field.classes is defined %}class=\"{{ field.classes }}\" {% endif %}
                                    {% if field.id is defined %}id=\"{{ field.id|e }}\" {% endif %}
                                    {% if field.style is defined %}style=\"{{ field.style|e }}\" {% endif %}
                                    {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}
                                    {% if field.placeholder %}placeholder=\"{{ field.placeholder|t }}\"{% endif %}
                                    {% if field.autofocus in ['on', 'true', 1] %}autofocus=\"autofocus\"{% endif %}
                                    {% if field.novalidate in ['on', 'true', 1] %}novalidate=\"novalidate\"{% endif %}
                                    {% if field.readonly in ['on', 'true', 1] %}readonly=\"readonly\"{% endif %}
                                    {% if field.autocomplete in ['on', 'off'] %}autocomplete=\"{{ field.autocomplete }}\"{% endif %}
                                    {% if field.attributes is defined %}
                                      {% for attribute in field.attributes %}
                                          {{ attribute.name }}=\"{{ attribute.value|e }}\"
                                      {% endfor %}
                                    {% endif %}
                                    {% if field.validate.required in ['on', 'true', 1] %}required=\"required\"{% endif %}
                                    {% if field.validate.pattern %}pattern=\"{{ field.validate.pattern|e }}\"{% endif %}
                                    {% if field.validate.message %}title=\"{{ field.validate.message|t|e }}\"
                                    {% elseif field.title is defined %}title=\"{{ field.title|t|e }}\" {% endif %}
                                {% endblock %}
                            />
                            {% block append %}{% endblock append %}
                            {% if form.inline_errors and errors %}
                                <div class=\"{{ form_errors_classes ?: 'form-errors' }}\">
                                    {% for error in errors %}
                                        <p class=\"form-message\"><i class=\"fa fa-exclamation-circle\"></i> {{ error }}</p>
                                    {% endfor %}
                                </div>
                            {% endif %}
                        </div>
                    {% endblock %}
                {% endblock %}
                {% if field.description %}
                    <div class=\"form-extra-wrapper {{ field.size|e }} {{ field.wrapper_classes }}\">
                        <span class=\"form-description\">{{ field.description|raw }}</span>
                    </div>
                {% endif %}

            </div>
        {% endblock %}
    </div>
{% endblock %}
", "forms/default/field.html.twig", "/var/www/blog.pemohon.my/user/plugins/form/templates/forms/default/field.html.twig");
    }
}
