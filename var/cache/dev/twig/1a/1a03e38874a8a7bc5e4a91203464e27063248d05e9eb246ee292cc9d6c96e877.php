<?php

/* SonataCoreBundle:Form:datepicker.html.twig */
class __TwigTemplate_8ed32f545c925542fd5e381f15527da184ae2105f01a65de088f9ba095bd77a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_type_date_picker_widget_html' => array($this, 'block_sonata_type_date_picker_widget_html'),
            'sonata_type_date_picker_widget' => array($this, 'block_sonata_type_date_picker_widget'),
            'sonata_type_datetime_picker_widget_html' => array($this, 'block_sonata_type_datetime_picker_widget_html'),
            'sonata_type_datetime_picker_widget' => array($this, 'block_sonata_type_datetime_picker_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_95152f0a5ff1f1def0d904fd38da92a39097b2d1c5634b21924940e9dba87d14 = $this->env->getExtension("native_profiler");
        $__internal_95152f0a5ff1f1def0d904fd38da92a39097b2d1c5634b21924940e9dba87d14->enter($__internal_95152f0a5ff1f1def0d904fd38da92a39097b2d1c5634b21924940e9dba87d14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataCoreBundle:Form:datepicker.html.twig"));

        // line 11
        $this->displayBlock('sonata_type_date_picker_widget_html', $context, $blocks);
        // line 22
        echo "
";
        // line 23
        $this->displayBlock('sonata_type_date_picker_widget', $context, $blocks);
        // line 39
        echo "
";
        // line 40
        $this->displayBlock('sonata_type_datetime_picker_widget_html', $context, $blocks);
        // line 51
        echo "
";
        // line 52
        $this->displayBlock('sonata_type_datetime_picker_widget', $context, $blocks);
        
        $__internal_95152f0a5ff1f1def0d904fd38da92a39097b2d1c5634b21924940e9dba87d14->leave($__internal_95152f0a5ff1f1def0d904fd38da92a39097b2d1c5634b21924940e9dba87d14_prof);

    }

    // line 11
    public function block_sonata_type_date_picker_widget_html($context, array $blocks = array())
    {
        $__internal_c3d8d3c20abb6da9dd522b81307e4bb77829c2e7f949c8ae9890794c9df99cfc = $this->env->getExtension("native_profiler");
        $__internal_c3d8d3c20abb6da9dd522b81307e4bb77829c2e7f949c8ae9890794c9df99cfc->enter($__internal_c3d8d3c20abb6da9dd522b81307e4bb77829c2e7f949c8ae9890794c9df99cfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_date_picker_widget_html"));

        // line 12
        echo "    ";
        if ((isset($context["datepicker_use_button"]) ? $context["datepicker_use_button"] : $this->getContext($context, "datepicker_use_button"))) {
            // line 13
            echo "        <div class='input-group date' id='dp_";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "'>
    ";
        }
        // line 15
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("data-date-format" => (isset($context["moment_format"]) ? $context["moment_format"] : $this->getContext($context, "moment_format"))));
        // line 16
        echo "    ";
        $this->displayBlock("date_widget", $context, $blocks);
        echo "
    ";
        // line 17
        if ((isset($context["datepicker_use_button"]) ? $context["datepicker_use_button"] : $this->getContext($context, "datepicker_use_button"))) {
            // line 18
            echo "            <span class=\"input-group-addon\"><span class=\"fa fa-calendar\"></span></span>
        </div>
    ";
        }
        
        $__internal_c3d8d3c20abb6da9dd522b81307e4bb77829c2e7f949c8ae9890794c9df99cfc->leave($__internal_c3d8d3c20abb6da9dd522b81307e4bb77829c2e7f949c8ae9890794c9df99cfc_prof);

    }

    // line 23
    public function block_sonata_type_date_picker_widget($context, array $blocks = array())
    {
        $__internal_32108e3ed6777d3a560401ddaf9fec474dcacae1c85a03f9d118e5f0aaddea8b = $this->env->getExtension("native_profiler");
        $__internal_32108e3ed6777d3a560401ddaf9fec474dcacae1c85a03f9d118e5f0aaddea8b->enter($__internal_32108e3ed6777d3a560401ddaf9fec474dcacae1c85a03f9d118e5f0aaddea8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_date_picker_widget"));

        // line 24
        echo "    ";
        ob_start();
        // line 25
        echo "        ";
        if ((isset($context["wrap_fields_with_addons"]) ? $context["wrap_fields_with_addons"] : $this->getContext($context, "wrap_fields_with_addons"))) {
            // line 26
            echo "            <div class=\"input-group\">
                ";
            // line 27
            $this->displayBlock("sonata_type_date_picker_widget_html", $context, $blocks);
            echo "
            </div>
        ";
        } else {
            // line 30
            echo "            ";
            $this->displayBlock("sonata_type_date_picker_widget_html", $context, $blocks);
            echo "
        ";
        }
        // line 32
        echo "        <script type=\"text/javascript\">
            jQuery(function (\$) {
                \$('#";
        // line 34
        echo (((isset($context["datepicker_use_button"]) ? $context["datepicker_use_button"] : $this->getContext($context, "datepicker_use_button"))) ? ("dp_") : (""));
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "').datetimepicker(";
        echo twig_jsonencode_filter((isset($context["dp_options"]) ? $context["dp_options"] : $this->getContext($context, "dp_options")));
        echo ");
            });
        </script>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_32108e3ed6777d3a560401ddaf9fec474dcacae1c85a03f9d118e5f0aaddea8b->leave($__internal_32108e3ed6777d3a560401ddaf9fec474dcacae1c85a03f9d118e5f0aaddea8b_prof);

    }

    // line 40
    public function block_sonata_type_datetime_picker_widget_html($context, array $blocks = array())
    {
        $__internal_bf6809f61cb77e4634340ae8dbbc688dfdef09db62c5735702f54914fb8bc4bb = $this->env->getExtension("native_profiler");
        $__internal_bf6809f61cb77e4634340ae8dbbc688dfdef09db62c5735702f54914fb8bc4bb->enter($__internal_bf6809f61cb77e4634340ae8dbbc688dfdef09db62c5735702f54914fb8bc4bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_datetime_picker_widget_html"));

        // line 41
        echo "    ";
        if ((isset($context["datepicker_use_button"]) ? $context["datepicker_use_button"] : $this->getContext($context, "datepicker_use_button"))) {
            // line 42
            echo "        <div class='input-group date' id='dtp_";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "'>
    ";
        }
        // line 44
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("data-date-format" => (isset($context["moment_format"]) ? $context["moment_format"] : $this->getContext($context, "moment_format"))));
        // line 45
        echo "    ";
        $this->displayBlock("datetime_widget", $context, $blocks);
        echo "
    ";
        // line 46
        if ((isset($context["datepicker_use_button"]) ? $context["datepicker_use_button"] : $this->getContext($context, "datepicker_use_button"))) {
            // line 47
            echo "          <span class=\"input-group-addon\"><span class=\"fa fa-calendar\"></span></span>
        </div>
    ";
        }
        
        $__internal_bf6809f61cb77e4634340ae8dbbc688dfdef09db62c5735702f54914fb8bc4bb->leave($__internal_bf6809f61cb77e4634340ae8dbbc688dfdef09db62c5735702f54914fb8bc4bb_prof);

    }

    // line 52
    public function block_sonata_type_datetime_picker_widget($context, array $blocks = array())
    {
        $__internal_9c240a0cf24da610ab2416094605c16e744565ee72f18fe0e5506d75e3170a76 = $this->env->getExtension("native_profiler");
        $__internal_9c240a0cf24da610ab2416094605c16e744565ee72f18fe0e5506d75e3170a76->enter($__internal_9c240a0cf24da610ab2416094605c16e744565ee72f18fe0e5506d75e3170a76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_datetime_picker_widget"));

        // line 53
        echo "    ";
        ob_start();
        // line 54
        echo "        ";
        if ((isset($context["wrap_fields_with_addons"]) ? $context["wrap_fields_with_addons"] : $this->getContext($context, "wrap_fields_with_addons"))) {
            // line 55
            echo "            <div class=\"input-group\">
                ";
            // line 56
            $this->displayBlock("sonata_type_datetime_picker_widget_html", $context, $blocks);
            echo "
            </div>
        ";
        } else {
            // line 59
            echo "            ";
            $this->displayBlock("sonata_type_datetime_picker_widget_html", $context, $blocks);
            echo "
        ";
        }
        // line 61
        echo "        <script type=\"text/javascript\">
            jQuery(function (\$) {
                \$('#";
        // line 63
        echo (((isset($context["datepicker_use_button"]) ? $context["datepicker_use_button"] : $this->getContext($context, "datepicker_use_button"))) ? ("dtp_") : (""));
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "').datetimepicker(";
        echo twig_jsonencode_filter((isset($context["dp_options"]) ? $context["dp_options"] : $this->getContext($context, "dp_options")));
        echo ");
            });
        </script>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_9c240a0cf24da610ab2416094605c16e744565ee72f18fe0e5506d75e3170a76->leave($__internal_9c240a0cf24da610ab2416094605c16e744565ee72f18fe0e5506d75e3170a76_prof);

    }

    public function getTemplateName()
    {
        return "SonataCoreBundle:Form:datepicker.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  195 => 63,  191 => 61,  185 => 59,  179 => 56,  176 => 55,  173 => 54,  170 => 53,  164 => 52,  154 => 47,  152 => 46,  147 => 45,  144 => 44,  138 => 42,  135 => 41,  129 => 40,  114 => 34,  110 => 32,  104 => 30,  98 => 27,  95 => 26,  92 => 25,  89 => 24,  83 => 23,  73 => 18,  71 => 17,  66 => 16,  63 => 15,  57 => 13,  54 => 12,  48 => 11,  41 => 52,  38 => 51,  36 => 40,  33 => 39,  31 => 23,  28 => 22,  26 => 11,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}
{% block sonata_type_date_picker_widget_html %}
    {% if datepicker_use_button %}
        <div class='input-group date' id='dp_{{ id }}'>
    {% endif %}
    {% set attr = attr|merge({'data-date-format': moment_format}) %}
    {{ block('date_widget') }}
    {% if datepicker_use_button %}
            <span class=\"input-group-addon\"><span class=\"fa fa-calendar\"></span></span>
        </div>
    {% endif %}
{% endblock sonata_type_date_picker_widget_html %}

{% block sonata_type_date_picker_widget %}
    {% spaceless %}
        {% if wrap_fields_with_addons %}
            <div class=\"input-group\">
                {{ block('sonata_type_date_picker_widget_html') }}
            </div>
        {% else %}
            {{ block('sonata_type_date_picker_widget_html') }}
        {% endif %}
        <script type=\"text/javascript\">
            jQuery(function (\$) {
                \$('#{{ datepicker_use_button ? 'dp_' : '' }}{{ id }}').datetimepicker({{ dp_options|json_encode|raw }});
            });
        </script>
    {% endspaceless %}
{% endblock sonata_type_date_picker_widget %}

{% block sonata_type_datetime_picker_widget_html %}
    {% if datepicker_use_button %}
        <div class='input-group date' id='dtp_{{ id }}'>
    {% endif %}
    {% set attr = attr|merge({'data-date-format': moment_format}) %}
    {{ block('datetime_widget') }}
    {% if datepicker_use_button %}
          <span class=\"input-group-addon\"><span class=\"fa fa-calendar\"></span></span>
        </div>
    {% endif %}
{% endblock sonata_type_datetime_picker_widget_html %}

{% block sonata_type_datetime_picker_widget %}
    {% spaceless %}
        {% if wrap_fields_with_addons %}
            <div class=\"input-group\">
                {{ block('sonata_type_datetime_picker_widget_html') }}
            </div>
        {% else %}
            {{ block('sonata_type_datetime_picker_widget_html') }}
        {% endif %}
        <script type=\"text/javascript\">
            jQuery(function (\$) {
                \$('#{{ datepicker_use_button ? 'dtp_' : '' }}{{ id }}').datetimepicker({{ dp_options|json_encode|raw }});
            });
        </script>
    {% endspaceless %}
{% endblock sonata_type_datetime_picker_widget %}
";
    }
}
