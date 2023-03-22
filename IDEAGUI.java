import java.awt.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.awt.event.KeyEvent;
import java.io.FileNotFoundException;
import java.io.FileOutputStream;
import java.io.IOException;
import java.io.InputStream;
import java.net.InetAddress;
import java.net.URL;
import java.text.SimpleDateFormat;
import javax.swing.*;
import javax.swing.filechooser.FileSystemView;
import javax.swing.JLabel;
import javax.swing.JFrame;
import javax.swing.JPanel;
import java.util.Calendar;
import java.awt.Cursor;
import java.awt.Desktop;
import java.awt.event.MouseAdapter;
import java.awt.event.MouseEvent;
import java.util.Date;

//Copyright © 2021 Creative. All rights reserved.
public class IDEAGUI extends JDialog {

    private JPanel panel;
    private JDialog log;

    JFrame jf = new JFrame();

    public static <Jlabel> void main(String[] args) throws IOException {

        //JOptionPane.showMessageDialog(null, "Not available in your area.", "Alert", JOptionPane.ERROR_MESSAGE);
        //System.exit(0);

        Calendar c = Calendar.getInstance();
        int yyyy = c.get(Calendar.YEAR);
        int mm = c.get(Calendar.MONTH);
        int dd = c.get(Calendar.DATE);

        //time
        long startTime = System.currentTimeMillis();
        long endTime = System.currentTimeMillis();
        Calendar calendar = Calendar.getInstance();
        int year = calendar.get(Calendar.YEAR);
        int month = calendar.get(Calendar.MONTH);
        int day = calendar.get(Calendar.DATE);
        int minute = calendar.get(Calendar.MINUTE);
        int hour = calendar.get(Calendar.HOUR);
        int second = calendar.get(Calendar.SECOND);
        int WeekOfYear = calendar.get(Calendar.DAY_OF_WEEK);

        System.out.println(+year+month+day+hour+minute+second);
        String StartTime = "00:00:00";
        String EndTime = "23:59:59";
        SimpleDateFormat simpleDateFormat = new SimpleDateFormat();
        String now = simpleDateFormat.format(new Date());
        Date nowTime;

        //JFrame.setDefaultLookAndFeelDecorated(true);
        JFrame frame = new JFrame("Creative Hub");
        frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        frame.setContentPane(new IDEAGUI().panel);
        frame.setPreferredSize(new Dimension(930, 530));
        frame.setVisible(true);
        frame.pack();
        frame.setLocationRelativeTo(null);
        frame.getContentPane().setBackground(Color.WHITE);
        frame.setLayout(null);
        //frame.setUndecorated(true);

        JPanel panel = new JPanel();

        JLabel jasmine = new JLabel("The Story of Jasmine");//or ジャスミンの物語
        jasmine.setBounds(150, 100, 150, 50);
        frame.add(jasmine);

        JLabel jasmineunlocktime = new JLabel("Unlock time: Never");
        jasmineunlocktime.setBounds(150, 120, 270, 50);
        frame.add(jasmineunlocktime);

        JLabel lovegirl = new JLabel("Love Girlfriend");//or 恋愛カノジョ
        lovegirl.setBounds(150, 200, 150, 50);
        frame.add(lovegirl);

        JLabel lovegirlunlocktime = new JLabel("Unlock Time: Never");
        lovegirlunlocktime.setBounds(150, 220, 270, 50);
        frame.add(lovegirlunlocktime);

        JLabel unknowgame = new JLabel("Creative Engine");
        unknowgame.setBounds(150, 300, 150, 50);
        frame.add(unknowgame);

        JLabel unknowunlocktime = new JLabel("Unlock Time: Never");
        unknowunlocktime.setBounds(150, 320, 150, 50);
        frame.add(unknowunlocktime);

        JButton btn = new JButton("Sign in");
        btn.setBounds(810, 10, 90, 30);
        btn.setEnabled(true);
        btn.setContentAreaFilled(false);
        btn.setBorder(null);
        btn.setContentAreaFilled(false);

        JButton jasminebtn = new JButton("PLAY");
        jasminebtn.setBounds(700, 100, 150, 50);
        jasminebtn.setBorder(null);
        jasminebtn.setContentAreaFilled(false);
        jasminebtn.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
                open("steam://rungameid/2006740");
            }

            private void open(String s) {
            }
        });

        JButton lovegirlbtn = new JButton("PLAY");
        lovegirlbtn.setBounds(700, 200, 150, 50);
        lovegirlbtn.setBorder(null);
        lovegirlbtn.setContentAreaFilled(false);

        frame.add(btn);
        frame.add(jasminebtn);
        frame.add(lovegirlbtn);

        JMenuBar jmb = new JMenuBar();
        JMenu filemenu = new JMenu("File");
        JMenuItem newItem = new JMenuItem("New");
        JMenuItem openItem = new JMenuItem("Open");
        JMenuItem closeItem = new JMenuItem("Close");
        JMenuItem saveitem = new JMenuItem("Save");
        JMenuItem quitItem = new JMenuItem("Quit");

        filemenu.setMnemonic(KeyEvent.VK_F);
        newItem.setAccelerator(KeyStroke.getKeyStroke(KeyEvent.VK_N, ActionEvent.CTRL_MASK));
        openItem.setAccelerator(KeyStroke.getKeyStroke(KeyEvent.VK_O, ActionEvent.CTRL_MASK));
        closeItem.setAccelerator(KeyStroke.getKeyStroke(KeyEvent.VK_X, ActionEvent.CTRL_MASK));
        saveitem.setAccelerator(KeyStroke.getKeyStroke(KeyEvent.VK_S, ActionEvent.CTRL_MASK));
        quitItem.setAccelerator(KeyStroke.getKeyStroke(KeyEvent.VK_Q, ActionEvent.CTRL_MASK));

        //filemenu.add(newMenu);
        filemenu.add(newItem);
        filemenu.add(openItem);
        filemenu.addSeparator();
        filemenu.add(closeItem);
        filemenu.add(saveitem);
        filemenu.addSeparator();
        filemenu.add(quitItem);

        JMenu editmenu = new JMenu("Edit");
        JMenuItem undoItem = new JMenuItem("Undo");
        JMenuItem redoItem = new JMenuItem("Redo");
        JMenuItem cutItem = new JMenuItem("Cut");
        JMenuItem copyItem = new JMenuItem("Copy");
        JMenuItem pasteItem = new JMenuItem("Paste");
        JMenuItem deleteItem = new JMenuItem("Delete");

        editmenu.setMnemonic(KeyEvent.VK_E);
        undoItem.setAccelerator(KeyStroke.getKeyStroke(KeyEvent.VK_Z, ActionEvent.CTRL_MASK));
        redoItem.setAccelerator(KeyStroke.getKeyStroke(KeyEvent.VK_X, ActionEvent.CTRL_MASK));
        cutItem.setAccelerator(KeyStroke.getKeyStroke(KeyEvent.VK_T, ActionEvent.CTRL_MASK));
        copyItem.setAccelerator(KeyStroke.getKeyStroke(KeyEvent.VK_C, ActionEvent.CTRL_MASK));
        pasteItem.setAccelerator(KeyStroke.getKeyStroke(KeyEvent.VK_V, ActionEvent.CTRL_MASK));
        deleteItem.setMnemonic(KeyEvent.VK_DELETE);

        editmenu.add(undoItem);
        editmenu.add(redoItem);
        editmenu.addSeparator();
        editmenu.add(cutItem);
        editmenu.add(copyItem);
        editmenu.add(pasteItem);
        editmenu.add(deleteItem);

        /*JMenu newMenu = new JMenu("New");
        JMenuItem packageItem = new JMenuItem("Package");
        JMenuItem classItem = new JMenuItem("Class");

        newMenu.add(packageItem);
        newMenu.add(classItem);*/

        JMenu actMenu = new JMenu("Account");
        JMenuItem signItem = new JMenuItem("Sign in or Sign up");
        JMenuItem signoutItem = new JMenuItem("Sign out");
        actMenu.add(signItem);
        actMenu.add(signoutItem);

        JMenu other = new JMenu("Other");
        JMenuItem aboutItem = new JMenuItem("About");
        other.add(aboutItem);

        jmb.add(filemenu);
        jmb.add(editmenu);
        jmb.add(actMenu);
        jmb.add(other);

        frame.setJMenuBar(jmb);//one only.
        frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        //frame.setContentPane(panel);
        frame.setVisible(true);

        //ping ip
        URL url = null;
        Boolean bon = false;
        try {
            url = new URL("https://store.steampowered.com");
            //url = new URL("https://www.youtube.com/");
            InputStream in = url.openStream();
            in.close();
        } catch (IOException e) {
            JOptionPane.showMessageDialog(null, "Cannot connect to Steam.", "Alert", JOptionPane.ERROR_MESSAGE);
            System.exit(0);
        }
        bon = isReachable(remoteInetAddr);
        quitItem.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
                System.exit(0);
            }
        });
        {
            openItem.addActionListener(new ActionListener() {
                @Override
                public void actionPerformed(ActionEvent e) {
                    /*try {
                        String path = "C:\\Users\\";
                        Runtime.getRuntime().exec("explorer.exe / select," + path);
                    } catch (Exception e1) {

                    }*/
                    //chooser
                    FileSystemView file = FileSystemView.getFileSystemView();
                    JFileChooser fileChooser = new JFileChooser();
                    fileChooser.setCurrentDirectory(file.getHomeDirectory());
                    fileChooser.setDialogTitle("Choose *.cre2");
                    fileChooser.setApproveButtonText("Yes");
                    fileChooser.setFileSelectionMode(JFileChooser.FILES_ONLY);

                    int result = fileChooser.showOpenDialog(null);

                    if (JFileChooser.APPROVE_OPTION == result) {
                        String path = fileChooser.getSelectedFile().getPath();
                        System.out.println("path: " + path);
                    }
                }
            });
        }
        {
            newItem.addActionListener(new ActionListener() {
                @Override
                public void actionPerformed(ActionEvent e) {

                }
            });
        }
        {
            /*saveitem.addActionListener(new ActionListener() {
                @Override
                public void actionPerformed(ActionEvent e) {
                    try {
                        FileOutputStream out = new FileOutputStream("C:\\Users\\Desktop\\*.cre3");
                        for (int i = 0; i < 10; i++) ;
                        JOptionPane.showMessageDialog(null, "Save Success.");
                    } catch (FileNotFoundException e1) {
                        e1.printStackTrace();
                    }
                }
            });*/
        }
        {
            signItem.addActionListener(new ActionListener() {
                @Override
                public void actionPerformed(ActionEvent e) {
                    JOptionPane.showMessageDialog(null, "Not available in your area.", "Alert", JOptionPane.ERROR_MESSAGE);
                }
            });
        }
        {

        }
    }

    //private static String remoteInetAddr = "23.42.182.65";
    private static String remoteInetAddr = "127.0.0.1";
    //private static String remoteInetAddr = "0.0.0.0";

    public static boolean isReachable(String remoteInetAddr) {
        boolean reachable = false;
        try {
            InetAddress address = InetAddress.getByName(remoteInetAddr);
            reachable = address.isReachable(5000);
        } catch (Exception e) {
            e.printStackTrace();
        }
        return reachable;
    }

    {
// GUI initializer generated by IntelliJ IDEA GUI Designer
// >>> IMPORTANT!! <<<
// DO NOT EDIT OR ADD ANY CODE HERE!
        $$$setupUI$$$();
    }

    /**
     * Method generated by IntelliJ IDEA GUI Designer
     * >>> IMPORTANT!! <<<
     * DO NOT edit this method OR call it in your code!
     *
     * @noinspection ALL
     */
    private void $$$setupUI$$$() {
        panel = new JPanel();
        panel.setLayout(new com.intellij.uiDesigner.core.GridLayoutManager(2, 1, new Insets(0, 0, 0, 0), -1, -1));
        panel.setBackground(new Color(-9934744));
        panel.setForeground(new Color(-9934744));
        final com.intellij.uiDesigner.core.Spacer spacer1 = new com.intellij.uiDesigner.core.Spacer();
        panel.add(spacer1, new com.intellij.uiDesigner.core.GridConstraints(0, 0, 1, 1, com.intellij.uiDesigner.core.GridConstraints.ANCHOR_CENTER, com.intellij.uiDesigner.core.GridConstraints.FILL_VERTICAL, 1, com.intellij.uiDesigner.core.GridConstraints.SIZEPOLICY_WANT_GROW, null, null, null, 0, false));
        final com.intellij.uiDesigner.core.Spacer spacer2 = new com.intellij.uiDesigner.core.Spacer();
        panel.add(spacer2, new com.intellij.uiDesigner.core.GridConstraints(1, 0, 1, 1, com.intellij.uiDesigner.core.GridConstraints.ANCHOR_CENTER, com.intellij.uiDesigner.core.GridConstraints.FILL_HORIZONTAL, com.intellij.uiDesigner.core.GridConstraints.SIZEPOLICY_WANT_GROW, 1, null, null, null, 0, false));
    }

    /**
     * @noinspection ALL
     */
    public JComponent $$$getRootComponent$$$() {
        return panel;
    }

    /**
     * Method generated by IntelliJ IDEA GUI Designer
     * >>> IMPORTANT!! <<<
     * DO NOT edit this method OR call it in your code!
     *
     * @noinspection ALL
     */

    /**
     * Method generated by IntelliJ IDEA GUI Designer
     * >>> IMPORTANT!! <<<
     * DO NOT edit this method OR call it in your code!
     *
     * @noinspection ALL
     */


}


