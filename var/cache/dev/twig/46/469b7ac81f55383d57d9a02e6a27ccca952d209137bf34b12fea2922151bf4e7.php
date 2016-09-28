<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_512cc3e0a1058101b629dfa525f8fa4eb4c905eaf4de62dffff80181aee706a6 extends Twig_Template
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
        $__internal_baefc4bd15c60b525f0a7a9a270cf9486dfe63ba20d31be891bdaf6cc6bc7b0e = $this->env->getExtension("native_profiler");
        $__internal_baefc4bd15c60b525f0a7a9a270cf9486dfe63ba20d31be891bdaf6cc6bc7b0e->enter($__internal_baefc4bd15c60b525f0a7a9a270cf9486dfe63ba20d31be891bdaf6cc6bc7b0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_baefc4bd15c60b525f0a7a9a270cf9486dfe63ba20d31be891bdaf6cc6bc7b0e->leave($__internal_baefc4bd15c60b525f0a7a9a270cf9486dfe63ba20d31be891bdaf6cc6bc7b0e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
    }
}
