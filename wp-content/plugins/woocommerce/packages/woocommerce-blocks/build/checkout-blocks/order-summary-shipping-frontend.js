(window.webpackWcBlocksJsonp=window.webpackWcBlocksJsonp||[]).push([[40],{132:function(e,c,t){"use strict";var a=t(0);t(188),c.a=()=>Object(a.createElement)("span",{className:"wc-block-components-spinner","aria-hidden":"true"})},134:function(e,c,t){"use strict";var a=t(0),n=t(1),s=t(4),r=t.n(s),o=(t(190),t(132));c.a=e=>{let{children:c,className:t,screenReaderLabel:s,showSpinner:l=!1,isLoading:i=!0}=e;return Object(a.createElement)("div",{className:r()(t,{"wc-block-components-loading-mask":i})},i&&l&&Object(a.createElement)(o.a,null),Object(a.createElement)("div",{className:r()({"wc-block-components-loading-mask__children":i}),"aria-hidden":i},c),i&&Object(a.createElement)("span",{className:"screen-reader-text"},s||Object(n.__)("Loading…","woocommerce")))}},188:function(e,c){},190:function(e,c){},458:function(e,c,t){"use strict";t.r(c);var a=t(0),n=t(426),s=t(37),r=t(30),o=t(10);c.default=e=>{let{className:c=""}=e;const{cartTotals:t,cartNeedsShipping:l}=Object(r.a)();if(!l)return null;const i=Object(s.getCurrencyFromPriceResponse)(t);return Object(a.createElement)(o.TotalsWrapper,{className:c},Object(a.createElement)(n.a,{showCalculator:!1,showRateSelector:!1,values:t,currency:i}))}}}]);