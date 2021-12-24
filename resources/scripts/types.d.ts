import { DefineComponent, Plugin } from 'vue'
import { AxiosStatic } from 'axios'
import RouteType from '@types/ziggy-js'

declare module '@inertiajs/inertia-vue3' {
    interface SetupOptions {
        el: string | Element
        app: DefineComponent
        props: object
        plugin: Plugin
    }

    interface InertiaOptions {
        resolve: (name: string) => DefineComponent
        setup: (options: SetupOptions) => void
    }

    export const createInertiaApp: (options: InertiaOptions) => void
}

declare global {
    interface Window {
        axios: AxiosStatic
        route: RouteType
    }
}
