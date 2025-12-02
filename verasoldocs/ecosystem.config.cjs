module.exports = {
    apps: [
        {
            name: 'verasoldocs-ssr',
            script: 'bootstrap/ssr/ssr.mjs',
            instances: 'max',
            exec_mode: 'cluster',
            watch: false,
            env: {
                NODE_ENV: 'production',
            },
        },
    ],
};
