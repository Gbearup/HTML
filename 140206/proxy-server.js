// 引入 cors-anywhere 模組
const corsAnywhere = require('cors-anywhere');

// 設定代理伺服器的主機和埠
const host = '0.0.0.0';
const port = 8080;

// 建立並啟動代理伺服器
corsAnywhere.createServer({
    originWhitelist: [],  // 允許所有來源
    requireHeaders: [],   // 允許無需特定標頭
}).listen(port, host, () => {
    console.log(`CORS 代理伺服器正在運行，端口: ${port}`);
});
