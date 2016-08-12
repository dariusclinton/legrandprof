<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_aa69f74a193ca6135618ef2a408baf9f84a532d04fb7c0c450aaf182b761a74d extends Twig_Template
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
        $__internal_8ba02c294d012e061c976b935964bccd2a198f462e0695909ccfc1a599d1b60a = $this->env->getExtension("native_profiler");
        $__internal_8ba02c294d012e061c976b935964bccd2a198f462e0695909ccfc1a599d1b60a->enter($__internal_8ba02c294d012e061c976b935964bccd2a198f462e0695909ccfc1a599d1b60a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_8ba02c294d012e061c976b935964bccd2a198f462e0695909ccfc1a599d1b60a->leave($__internal_8ba02c294d012e061c976b935964bccd2a198f462e0695909ccfc1a599d1b60a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
