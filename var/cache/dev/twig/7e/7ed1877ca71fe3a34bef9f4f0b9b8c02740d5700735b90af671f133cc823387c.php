<?php

/* SonataCoreBundle:Form:colorpicker.html.twig */
class __TwigTemplate_93cc7a491641e644ccf7a5a98c5ce8158debeef8eb9370a53772cfe0939fe17d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_type_color_selector_widget' => array($this, 'block_sonata_type_color_selector_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4762ec2e6f185a2737c1e523feb6b1251be229e1b39f3ea876464f085149bcb7 = $this->env->getExtension("native_profiler");
        $__internal_4762ec2e6f185a2737c1e523feb6b1251be229e1b39f3ea876464f085149bcb7->enter($__internal_4762ec2e6f185a2737c1e523feb6b1251be229e1b39f3ea876464f085149bcb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataCoreBundle:Form:colorpicker.html.twig"));

        // line 11
        $this->displayBlock('sonata_type_color_selector_widget', $context, $blocks);
        
        $__internal_4762ec2e6f185a2737c1e523feb6b1251be229e1b39f3ea876464f085149bcb7->leave($__internal_4762ec2e6f185a2737c1e523feb6b1251be229e1b39f3ea876464f085149bcb7_prof);

    }

    public function block_sonata_type_color_selector_widget($context, array $blocks = array())
    {
        $__internal_60ea0cb9d8513f5449f2144ef41fb3393e8727fc4e8048338120040752403980 = $this->env->getExtension("native_profiler");
        $__internal_60ea0cb9d8513f5449f2144ef41fb3393e8727fc4e8048338120040752403980->enter($__internal_60ea0cb9d8513f5449f2144ef41fb3393e8727fc4e8048338120040752403980_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_color_selector_widget"));

        // line 12
        echo "    ";
        $this->displayBlock("choice_widget", $context, $blocks);
        echo "
    ";
        // line 13
        ob_start();
        // line 14
        echo "        <script type=\"text/javascript\">
            jQuery(function (\$) {
                var select2FormatColorSelect = function format(state) {
                    if (!state.id || state.disabled) {
                        return state.text;
                    }

                    return ' <i class=\"fa fa-square\" style=\"color: '+ state.id +'\"></i> ' + state.text;
                };

                \$('#";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "').select2({
                    formatResult:    select2FormatColorSelect,
                    formatSelection: select2FormatColorSelect,
                    width:           '100%',
                    escapeMarkup:    function(m) { return m; }
                });
            });
        </script>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_60ea0cb9d8513f5449f2144ef41fb3393e8727fc4e8048338120040752403980->leave($__internal_60ea0cb9d8513f5449f2144ef41fb3393e8727fc4e8048338120040752403980_prof);

    }

    public function getTemplateName()
    {
        return "SonataCoreBundle:Form:colorpicker.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  54 => 24,  42 => 14,  40 => 13,  35 => 12,  23 => 11,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}
{% block sonata_type_color_selector_widget %}
    {{ block('choice_widget') }}
    {% spaceless %}
        <script type=\"text/javascript\">
            jQuery(function (\$) {
                var select2FormatColorSelect = function format(state) {
                    if (!state.id || state.disabled) {
                        return state.text;
                    }

                    return ' <i class=\"fa fa-square\" style=\"color: '+ state.id +'\"></i> ' + state.text;
                };

                \$('#{{ id }}').select2({
                    formatResult:    select2FormatColorSelect,
                    formatSelection: select2FormatColorSelect,
                    width:           '100%',
                    escapeMarkup:    function(m) { return m; }
                });
            });
        </script>
    {% endspaceless %}
{% endblock sonata_type_color_selector_widget %}
";
    }
}
