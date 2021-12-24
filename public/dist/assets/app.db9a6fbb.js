import { a as d, I as m, c as p, h, A as f, p as g } from './vendor.dbfbc9cd.js'
const P = 'modulepreload',
    o = {},
    v = '/dist/',
    I = function (n, r) {
        return !r || r.length === 0
            ? n()
            : Promise.all(
                  r.map((e) => {
                      if (((e = `${v}${e}`), e in o)) return
                      o[e] = !0
                      const s = e.endsWith('.css'),
                          c = s ? '[rel="stylesheet"]' : ''
                      if (document.querySelector(`link[href="${e}"]${c}`))
                          return
                      const t = document.createElement('link')
                      if (
                          ((t.rel = s ? 'stylesheet' : P),
                          s || ((t.as = 'script'), (t.crossOrigin = '')),
                          (t.href = e),
                          document.head.appendChild(t),
                          s)
                      )
                          return new Promise((u, l) => {
                              t.addEventListener('load', u),
                                  t.addEventListener('error', l)
                          })
                  })
              ).then(() => n())
    }
d.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest'
m.init()
const i = document.getElementById('app'),
    E = {
        './Pages/Home/Index.vue': () =>
            I(
                () => import('./Index.9aea56ea.js'),
                ['assets/Index.9aea56ea.js', 'assets/vendor.dbfbc9cd.js']
            ),
    }
p({
    render: () =>
        h(f, {
            initialPage: JSON.parse(i.dataset.page),
            resolveComponent: (a) => {
                const n = E[`./Pages/${a}.vue`]
                if (!n)
                    throw new Error(
                        `Unknown page ${a}. Is it located under Pages with a .vue extension?`
                    )
                return n().then((r) => r.default)
            },
        }),
})
    .mixin({ methods: { route } })
    .use(g)
    .mount(i)
