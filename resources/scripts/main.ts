import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/inertia-vue3'
import { InertiaProgress } from '@inertiajs/progress'

import axios from 'axios'

axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest'
window.axios = axios

import '../css/app.css'

const appName =
    window.document.getElementsByTagName('title')[0]?.innerText || 'Laravel'

function withVite(pages: Record<string, any>, name: string) {
    for (const path in pages) {
        if (path.endsWith(`${name.replace('.', '/')}.vue`)) {
            return typeof pages[path] === 'function'
                ? pages[path]()
                : pages[path]
        }
    }

    throw new Error('Page not found: ' + name)
}

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => withVite(import.meta.glob('./Pages/**/*.vue'), name),
    setup({ el, app, props, plugin }) {
        createApp({ render: () => h(app, props) })
            .use(plugin)
            .mixin({ methods: { route: window.route } })
            .mount(el)
    },
})

InertiaProgress.init({ color: '#4B5563' })
