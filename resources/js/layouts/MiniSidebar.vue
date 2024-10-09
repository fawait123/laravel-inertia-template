<script setup lang="ts">
import {
    Home,
    LineChart,
    Package,
    Settings,
    ShoppingCart,
    Users2,
    Menu,
} from 'lucide-vue-next'
import {
    Tooltip,
    TooltipContent,
    TooltipProvider,
    TooltipTrigger,
} from '@/components/ui/tooltip'

const emmit = defineEmits()

const handleClick = () => {
    emmit('onClick')
}

</script>
<template>
    <div>
        <nav class="flex flex-col items-center gap-4 px-2 sm:py-5">
            <a href="#" @click="handleClick"
                class="group flex h-9 w-9 shrink-0 items-center justify-center gap-2 rounded-full bg-primary text-lg font-semibold text-primary-foreground md:h-8 md:w-8 md:text-base">
                <Menu class="h-4 w-4 transition-all group-hover:scale-110" />
                <span class="sr-only">Acme Inc</span>
            </a>
            <TooltipProvider>
                <Tooltip>
                    <TooltipTrigger as-child>
                        <a href="#"
                            class="flex h-9 w-9 items-center justify-center rounded-lg text-muted-foreground transition-colors hover:text-foreground md:h-8 md:w-8">
                            <Home class="h-5 w-5" />
                            <span class="sr-only">Dashboard</span>
                        </a>
                    </TooltipTrigger>
                    <TooltipContent side="right">
                        Dashboard
                    </TooltipContent>
                </Tooltip>
            </TooltipProvider>
            <TooltipProvider>
                <Tooltip>
                    <TooltipTrigger as-child>
                        <a href="#"
                            class="flex h-9 w-9 items-center justify-center rounded-lg bg-accent text-accent-foreground transition-colors hover:text-foreground md:h-8 md:w-8">
                            <ShoppingCart class="h-5 w-5" />
                            <span class="sr-only">Orders</span>
                        </a>
                    </TooltipTrigger>
                    <TooltipContent side="right">
                        Orders
                    </TooltipContent>
                </Tooltip>
            </TooltipProvider>

            <TooltipProvider>
                <Tooltip>
                    <TooltipTrigger as-child>
                        <a href="#"
                            class="flex h-9 w-9 items-center justify-center rounded-lg text-muted-foreground transition-colors hover:text-foreground md:h-8 md:w-8">
                            <Package class="h-5 w-5" />
                            <span class="sr-only">Products</span>
                        </a>
                    </TooltipTrigger>
                    <TooltipContent side="right">
                        Products
                    </TooltipContent>
                </Tooltip>
            </TooltipProvider>

            <TooltipProvider>
                <Tooltip>
                    <TooltipTrigger as-child>
                        <a href="#"
                            class="flex h-9 w-9 items-center justify-center rounded-lg text-muted-foreground transition-colors hover:text-foreground md:h-8 md:w-8">
                            <Users2 class="h-5 w-5" />
                            <span class="sr-only">Customers</span>
                        </a>
                    </TooltipTrigger>
                    <TooltipContent side="right">
                        Customers
                    </TooltipContent>
                </Tooltip>
            </TooltipProvider>

            <TooltipProvider>
                <Tooltip>
                    <TooltipTrigger as-child>
                        <a href="#"
                            class="flex h-9 w-9 items-center justify-center rounded-lg text-muted-foreground transition-colors hover:text-foreground md:h-8 md:w-8">
                            <LineChart class="h-5 w-5" />
                            <span class="sr-only">Analytics</span>
                        </a>
                    </TooltipTrigger>
                    <TooltipContent side="right">
                        Analytics
                    </TooltipContent>
                </Tooltip>
            </TooltipProvider>
        </nav>
        <nav class="mt-auto flex flex-col items-center gap-4 px-2 sm:py-5">
            <TooltipProvider>
                <Tooltip>
                    <TooltipTrigger as-child>
                        <a href="#"
                            class="flex h-9 w-9 items-center justify-center rounded-lg text-muted-foreground transition-colors hover:text-foreground md:h-8 md:w-8">
                            <Settings class="h-5 w-5" />
                            <span class="sr-only">Settings</span>
                        </a>
                    </TooltipTrigger>
                    <TooltipContent side="right">
                        Settings
                    </TooltipContent>
                </Tooltip>
            </TooltipProvider>
        </nav>
    </div>
</template>
