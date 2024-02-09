{ pkgs }: {
  deps = [
    pkgs.openssh_gssapi
    pkgs.openssh_hpn
    pkgs.openssh
    pkgs.nodePackages.vscode-langservers-extracted
    pkgs.nodePackages.typescript-language-server  
  ];
}