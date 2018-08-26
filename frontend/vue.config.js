module.exports = {
    devServer: {
        proxy: 'http://hotel-booking.devel'
    },
    outputDir: '../public',
    indexPath: process.env.NODE_ENV === 'production'
        ? '../resources/views/index.blade.php'
        : 'index.html'
};
