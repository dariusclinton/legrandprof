<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_2dc0855602b9ce2505cf7ebefe37aea75857ab930a32e453dbc9a86099e7f53f extends Twig_Template
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
        $__internal_5db197c661d8de2a092925fd4b424568b490886d4f191217d62c62662381e09d = $this->env->getExtension("native_profiler");
        $__internal_5db197c661d8de2a092925fd4b424568b490886d4f191217d62c62662381e09d->enter($__internal_5db197c661d8de2a092925fd4b424568b490886d4f191217d62c62662381e09d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_5db197c661d8de2a092925fd4b424568b490886d4f191217d62c62662381e09d->leave($__internal_5db197c661d8de2a092925fd4b424568b490886d4f191217d62c62662381e09d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->block($form, 'button_widget',  array('type' => isset($type) ? $type : 'submit')) ?>*/
/* */
