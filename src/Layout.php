<?php

namespace QuarkCMS\QuarkAdmin;

class Layout extends Element
{
    /**
     * layout 的左上角 的 title
     *
     * @var string
     */
    public $title;

    /**
     * layout 的左上角 logo 的 url
     *
     * @var string
     */
    public $logo;

    /**
     * layout 的加载态
     *
     * @var bool
     */
    public $loading = true;

    /**
     * layout 的内容区 style
     *
     * @var array
     */
    public $contentStyle = null;

    /**
     * layout 的菜单模式,side：右侧导航，top：顶部导航
     *
     * @var string
     */
    public $layout = 'side';

    /**
     * layout 的内容模式,Fluid：定宽 1200px，Fixed：自适应
     *
     * @var string
     */
    public $contentWidth = 'Fixed';

    /**
     * 导航的主题，'light' | 'dark'
     *
     * @var string
     */
    public $navTheme = 'dark';

    /**
     * 是否固定 header 到顶部
     *
     * @var bool
     */
    public $fixedHeader = true;

    /**
     * 是否固定导航
     *
     * @var bool
     */
    public $fixSiderbar = false;

    /**
     * 使用 IconFont 的图标配置
     *
     * @var string
     */
    public $iconfontUrl = null;

    /**
     * 当前 layout 的语言设置，'zh-CN' | 'zh-TW' | 'en-US'
     *
     * @var string
     */
    public $locale = 'zh-CN';

    /**
     * 侧边菜单宽度
     *
     * @var number
     */
    public $siderWidth = 210;

    /**
     * 控制菜单的收起和展开
     *
     * @var bool
     */
    public $collapsed = false;

    /**
     * layout 的左上角 的 title
     * 
     * @param  string  $title
     * @return $this
     */
    public function title($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * layout 的左上角的 logo
     *
     * @param  string  $logo
     * @return $this
     */
    public function logo($logo)
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * layout 的加载态
     *
     * @param  bool  $loading
     * @return $this
     */
    public function loading($loading = true)
    {
        $loading ? $this->loading = true : $this->loading = false;

        return $this;
    }

    /**
     * layout 的菜单模式,side：右侧导航，top：顶部导航
     *
     * @param  string  $layout
     * @return $this
     */
    public function layout($layout)
    {
        if(!in_array($layout,['side', 'top'])) {
            throw new \Exception("argument must be in 'side', 'top'!");
        }

        return $this;
    }

    /**
     * layout 的内容模式,Fluid：定宽 1200px，Fixed：自适应
     *
     * @param  string  $contentWidth
     * @return $this
     */
    public function contentWidth($contentWidth)
    {
        if(!in_array($contentWidth,['Fluid', 'Fixed'])) {
            throw new \Exception("argument must be in 'Fluid', 'Fixed'!");
        }

        return $this;
    }

    /**
     * 导航的主题，'light' | 'dark'
     *
     * @param  string  $navTheme
     * @return $this
     */
    public function navTheme($navTheme)
    {
        if(!in_array($navTheme,['light', 'dark'])) {
            throw new \Exception("argument must be in 'light', 'dark'!");
        }

        return $this;
    }

    /**
     * 是否固定 header 到顶部
     *
     * @param  bool  $fixedHeader
     * @return $this
     */
    public function fixedHeader($fixedHeader = true)
    {
        $fixedHeader ? $this->fixedHeader = true : $this->fixedHeader = false;

        return $this;
    }

    /**
     * 是否固定导航
     *
     * @param  bool  $fixedHeader
     * @return $this
     */
    public function fixSiderbar($fixSiderbar = true)
    {
        $fixSiderbar ? $this->fixSiderbar = true : $this->fixSiderbar = false;

        return $this;
    }

    /**
     * 使用 IconFont 的图标配置
     *
     * @param  string  $iconfontUrl
     * @return $this
     */
    public function iconfontUrl($iconfontUrl)
    {
        $this->iconfontUrl = $iconfontUrl;

        return $this;
    }

    /**
     * 当前 layout 的语言设置，'zh-CN' | 'zh-TW' | 'en-US'
     *
     * @param  string  $locale
     * @return $this
     */
    public function locale($locale)
    {
        if(!in_array($locale,['zh-CN', 'zh-TW', 'en-US'])) {
            throw new \Exception("argument must be in 'zh-CN', 'zh-TW', 'en-US'!");
        }

        return $this;
    }

    /**
     * 侧边菜单宽度
     *
     * @param  string|number  $siderWidth
     * @return $this
     */
    public function siderWidth($siderWidth)
    {
        $this->siderWidth = $siderWidth;

        return $this;
    }

    /**
     * 控制菜单的收起和展开
     *
     * @param  bool  $collapsed
     * @return $this
     */
    public function collapsed($collapsed)
    {
        $collapsed ? $this->collapsed = true : $this->collapsed = false;

        return $this;
    }

    /**
     * Prepare the element for JSON serialization.
     *
     * @return array
     */
    public function jsonSerialize()
    {
        return array_merge([
            'title' => $this->title,
            'logo' => $this->logo,
            'loading' => $this->loading,
            'layout' => $this->layout,
            'contentWidth' => $this->contentWidth,
            'navTheme' => $this->navTheme,
            'fixedHeader' => $this->fixedHeader,
            'fixSiderbar' => $this->fixSiderbar,
            'iconfontUrl' => $this->iconfontUrl,
            'locale' => $this->locale,
            'siderWidth' => $this->siderWidth,
            'collapsed' => $this->collapsed,
        ], parent::jsonSerialize());
    }
}