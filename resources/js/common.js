const nl2br = (str, replaceMode, isXhtml) => {
	let breakTag = isXhtml ? "<br />" : "<br>";
	let replaceStr = replaceMode ? "$1" + breakTag : "$1" + breakTag + "$2";

	return (str + "").replace(/([^>\r\n]?)(\r\n|\n\r|\r|\n)/g, replaceStr);
};

export { nl2br };
