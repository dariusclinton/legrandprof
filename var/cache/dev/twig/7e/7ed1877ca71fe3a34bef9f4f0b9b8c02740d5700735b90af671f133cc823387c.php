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
        $__internal_4110f6a9a7ec4b7145f6cb151e306513d6244dd6194df3b7f8eaf5541096676d = $this->env->getExtension("native_profiler");
        $__internal_4110f6a9a7ec4b7145f6cb151e306513d6244dd6194df3b7f8eaf5541096676d->enter($__internal_4110f6a9a7ec4b7145f6cb151e306513d6244dd6194df3b7f8eaf5541096676d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataCoreBundle:Form:colorpicker.html.twig"));

        // line 11
        $this->displayBlock('sonata_type_color_selector_widget', $context, $blocks);
        
        $__internal_4110f6a9a7ec4b7145f6cb151e306513d6244dd6194df3b7f8eaf5541096676d->leave($__internal_4110f6a9a7ec4b7145f6cb151e306513d6244dd6194df3b7f8eaf5541096676d_prof);

    }

    public function block_sonata_type_color_selector_widget($context, array $blocks = array())
    {
        $__internal_ac758014a3114baee94e4063d970654138bb3dc5e3a35f4110051c34fa0c3fe8 = $this->env->getExtension("native_profiler");
        $__internal_ac758014a3114baee94e4063d970654138bb3dc5e3a35f4110051c34fa0c3fe8->enter($__internal_ac758014a3114baee94e4063d970654138bb3dc5e3a35f4110051c34fa0c3fe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_color_selector_widget"));

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
        
        $__internal_ac758014a3114baee94e4063d970654138bb3dc5e3a35f4110051c34fa0c3fe8->leave($__internal_ac758014a3114baee94e4063d970654138bb3dc5e3a35f4110051c34fa0c3fe8_prof);

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
